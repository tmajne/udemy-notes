<?php

declare(strict_types=1);

namespace App\Model;

use PDO;
use App\Exception\NotFoundException;
use App\Exception\StorageException;
use Throwable;

class NoteModel extends AbstractModel implements ModelInterface
{
    public function get(int $id): array
    {
        $note = null;
        
        try {
            //TODO: wyjaśnić dlaczego nie eskejpujemy
            $query = "SELECT * FROM notes WHERE id = $id";
            $note = $this->connection->query($query, PDO::FETCH_ASSOC);
            $note = $note->fetch();
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu notatki', 400, $e);
        }

        if (!$note) {
            throw new NotFoundException('Notatka nie istnieje');
        }

        return $note;
    }

    public function list(
        int $page = 1,
        int $size = 10,
        string $sortBy = 'created',
        string $sortOrder = 'desc'
    ): array {
        return $this->findBy(null, $page, $size, $sortOrder, $sortBy);
    }

    public function search(
        string $phrase,
        int $page = 1,
        int $size = 10,
        string $sortBy = 'created',
        string $sortOrder = 'desc'
    ): array {
        return $this->findBy($phrase, $page, $size, $sortOrder, $sortBy);
    }

    public function create(array $data): void
    {
        try {
            $title = $this->connection->quote($data['title'], PDO::PARAM_STR);
            $description = $this->connection->quote($data['description'], PDO::PARAM_STR);
            $created = $this->connection->quote(date('Y-m-d H:i:s'));

            $query = "
                INSERT INTO notes (title, description, created) 
                VALUES ($title, $description, $created)
            ";
            $this->connection->exec($query);

        } catch (Throwable $e) {
            throw new StorageException('Nie udało się utworzyć nowej notatki', 400, $e);
        }
    }

    public function update(int $id, array $data): void
    {
        try {
            $title = $this->connection->quote($data['title'], PDO::PARAM_STR);
            $description = $this->connection->quote($data['description'], PDO::PARAM_STR);
            $query = "
                UPDATE notes
                SET title = $title, description = $description
                WHERE id = $id
            ";
            $this->connection->exec($query);
        } catch (Throwable $e) {
            throw new StorageException('Nie udało się zaktualizować notatki', 400, $e);
        }
    }
    
    public function delete(int $id): void
    {
        try {
            $query = "DELETE FROM notes WHERE id = $id LIMIT 1";
            $this->connection->exec($query);
        } catch (Throwable $e) {
            throw new StorageException('Nie udało się usunąć notatki', 400, $e);
        }
    }

    public function count(): int
    {
        try {
            $query = "SELECT count(*) as cn FROM notes";
            $result = $this->connection->query($query, PDO::FETCH_ASSOC);
            $count = $result->fetch();

            if ($count === false) {
                throw new StorageException('Błąd przy próbie odczytu liczny notatek', 400);
            }

            return (int) $count['cn'];
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu liczny notatek', 400, $e);
        }
    }

    public function searchCount(string $phrase): int
    {
        try {
            // TODO: %LIKE%
            $phrase = $this->connection->quote('%'.$phrase.'%', PDO::PARAM_STR);
            $query = "SELECT count(*) as cn FROM notes WHERE title LIKE($phrase)";
            $result = $this->connection->query($query, PDO::FETCH_ASSOC);
            $count = $result->fetch();

            if ($count === false) {
                throw new StorageException('Błąd przy próbie odczytu liczny notatek', 400);
            }

            return (int) $count['cn'];
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu liczny notatek', 400, $e);
        }
    }


    // PRIVATE AREA

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

            //if ($sortOrder != 'desc' && $sortOrder != 'asc') {
            if (!in_array($sortOrder, ['desc', 'asc'])) {
                $sortOrder = 'desc';
            }

            if (!in_array($sortBy, ['created', 'title'])) {
                $sortBy = 'created';
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

            $notes = $this->connection->query($query, PDO::FETCH_ASSOC);
            return $notes->fetchAll();
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu listy notatek', 400, $e);
        }
    }
}
