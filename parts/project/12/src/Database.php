<?php

declare(strict_types=1);

namespace App;

use PDO;
use PDOException;
use App\Exception\ConfigException;
use App\Exception\NotFoundException;
use App\Exception\StorageException;
use Throwable;

class Database
{
    private PDO $connection;

    public function __construct(array $config)
    {
        $this->validateConfiguration($config);
        $this->connection = $this->createConnection($config);
    }

    public function getNote(int $id): array
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

    public function getNotes(
        int $page = 1,
        int $size = 10,
        string $sortBy = 'created',
        string $sortOrder = 'desc'
    ): array
    {
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

            $query = "SELECT * FROM notes ORDER BY $sortBy $sortOrder LIMIT $offset, $limit";
            $notes = $this->connection->query($query, PDO::FETCH_ASSOC);
            return $notes->fetchAll();
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu listy notatek', 400, $e);
        }
    }

    public function searchNotes(
        string $phrase,
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

            $phrase = $this->connection->quote('%'.$phrase.'%', PDO::PARAM_STR);

            $query = "
                SELECT * 
                    FROM notes 
                    WHERE title LIKE($phrase)
                    ORDER BY $sortBy $sortOrder 
                    LIMIT $offset, $limit
            ";
            $notes = $this->connection->query($query, PDO::FETCH_ASSOC);
            return $notes->fetchAll();
        } catch (Throwable $e) {
            throw new StorageException('Błąd przy próbie odczytu listy notatek', 400, $e);
        }
    }

    public function createNote(array $data): void
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

    public function editNote(int $id, array $data): void
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
    
    public function deleteNote(int $id): void
    {
        try {
            $query = "DELETE FROM notes WHERE id = $id LIMIT 1";
            $this->connection->exec($query);
        } catch (Throwable $e) {
            throw new StorageException('Nie udało się usunąć notatki', 400, $e);
        }
    }

    public function getCount(): int
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

    public function getSearchCount(string $phrase): int
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

    private function validateConfiguration(array $config): void
    {
        if(
            empty($config['host'])
            || empty($config['name'])
            || empty($config['user'])
            || empty($config['password'])
        ) {
            throw new ConfigException('Storage configuration error');
        }
    }

    private function createConnection(array $config): PDO
    {
        try {
            
            $dsn = 'mysql:dbname=' . $config['name'] . ';host=' . $config['host'] . ';charset=utf8';
            return new PDO(
                $dsn,
                $config['user'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //TODO: wyjaśnić po co
                ]
            );

        } catch (PDOException $e) {
            throw new StorageException('Storage connection error: PDO',  $e->getCode(), $e);
        } catch (Throwable $e) {
            throw new StorageException('Storage connection error: General',  $e->getCode(), $e);
        }
    }
}
