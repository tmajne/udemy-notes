<?php

require_once "StorageException.php";

class Database
{
    /** @var string */
    private $config;

    /** @var PDO */
    private $db;

    public function __construct(array $config)
    {
        try {
            //TODO - dodać walicację konfiga
            $this->validateConfig($config);
            $this->config = $config;
            $dsn = 'mysql:dbname=' . $this->config['name'] . ';host=' . $this->config['host'] . ';charset=utf8';
            $this->db = new PDO(
                $dsn,
                $this->config['user'],
                $this->config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //TODO: wyjaśnić po co
                ]
            );
        } catch (PDOException $e) {
            throw new StorageException('Błąd w dostępie do danych', $e->getCode(), $e);
        } catch (Throwable $e) {
            //TODO: przechwycić błędy walidacji
        }
    }

    public function getCount(): int
    {
        try {
            $query = "SELECT count(*) as cn FROM notes";
            $result = $this->db->query($query, PDO::FETCH_ASSOC);
            $count = $result->fetch();

            if ($count === false) {
                throw new StorageException('Błąd przy próbie odczytu liczny notatek', 400);
            }

            return $count['cn'];
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu liczny notatek', 400, $e);
        }
    }

    public function getSearchCount(string $phrase): int
    {
        try {
            $phrase = $this->db->quote('%'.$phrase.'%', PDO::PARAM_STR);
            $query = "SELECT count(*) as cn FROM notes WHERE title LIKE($phrase)";
            $result = $this->db->query($query, PDO::FETCH_ASSOC);
            $count = $result->fetch();

            if ($count === false) {
                throw new StorageException('Błąd przy próbie odczytu liczny notatek', 400);
            }

            return $count['cn'];
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu liczny notatek', 400, $e);
        }
    }

    public function getNotes(
        int $page = 1,
        int $size = 10,
        string $sortBy = 'created',
        string $sortOrder = 'desc'
    ): array {
        return $this->findBy(null, $page, $size, $sortOrder, $sortBy);
    }

    public function searchNotes(
        string $phrase,
        int $page = 1,
        int $size = 10,
        string $sortBy = 'created',
        string $sortOrder = 'desc'
    ): array {
        return $this->findBy($phrase, $page, $size, $sortOrder, $sortBy);
    }

    public function getNote(int $id): array
    {
        try {
            $query = "SELECT * FROM notes WHERE id = $id";
            $note = $this->db->query($query, PDO::FETCH_ASSOC);
            return $note->fetch();
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu notatki', 400, $e);
        }
    }

    public function createNote(array $data): void
    {
        try {
            $title = $this->db->quote($data['title'], PDO::PARAM_STR);
            $description = $this->db->quote($data['description'], PDO::PARAM_STR);
            $created = $this->db->quote(date('Y-m-d H:i:s'));
            $query = "INSERT INTO notes (title, description, created) VALUES ($title, $description, $created)";
            $this->db->exec($query);
        } catch (Throwable $e) {
            throw new StorageException('Nie udało się utworzyć nowej noatatki', 400, $e);
        }
    }

    public function editNote(int $id, array $data): void
    {
        try {
            $title = $this->db->quote($data['title'], PDO::PARAM_STR);
            $description = $this->db->quote($data['description'], PDO::PARAM_STR);
            $query = "
                UPDATE notes
                SET title = $title, description = $description
                WHERE id = $id
            ";
            $this->db->exec($query);
        } catch (Throwable $e) {
            throw new StorageException('Nie udało się zaktualizować noatatki', 400, $e);
        }
    }

    public function deleteNote(int $id): void
    {
        try {
            $query = "DELETE FROM notes WHERE id = $id LIMIT 1";
            $this->db->exec($query);
        } catch (Throwable $e) {
            throw new StorageException('Nie udało się usunąć noatatki', 400, $e);
        }
    }

    private function validateConfig(array $config): bool
    {
        return true;
    }

    private function findBy(
        ?string $phrase,
        int $page = 1,
        int $size = 10,
        string $sortBy = 'created',
        string $sortOrder = 'desc'
    ): array {
        try {
            $limit = $size;
            $offset = ($page - 1) * $size;

            // validacja
            if ($sortBy != 'created' && $sortBy != 'title') {
                $sortBy = 'created';
            }

            // validacja
            if ($sortOrder != 'desc' && $sortOrder != 'asc') {
                $sortOrder = 'desc';
            }

            $where = '';
            if ($phrase) {
                $phrase = $this->db->quote('%'.$phrase.'%', PDO::PARAM_STR);
                $where = "WHERE title LIKE($phrase)";
            }

            $query = "
                SELECT * 
                    FROM notes 
                    $where 
                    ORDER BY $sortBy $sortOrder 
                    LIMIT $offset, $limit
            ";

            $notes = $this->db->query($query, PDO::FETCH_ASSOC);

            $result = [];
            foreach ($notes as $note) {
                $result[] = $note;
            }

            return $result;
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu listy notatek', 400, $e);
        }
    }
}