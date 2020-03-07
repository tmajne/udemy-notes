<?php

declare(strict_types=1);

namespace App;

require_once 'AbstractModel.php';
require_once 'ModelInterface.php';
require_once 'Exception/ConfigException.php';
require_once 'Exception/StorageException.php';
require_once 'Exception/NotFoundException.php';

use App\Exception\ConfigException;
use App\Exception\NotFoundException;
use App\Exception\StorageException;
use Throwable;

class Model extends AbstractModel implements ModelInterface
{
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

    public function getNotes(): array
    {
        try {

            $query = "SELECT * FROM notes";
            $notes = $this->connection->query($query, PDO::FETCH_ASSOC);
            return $notes->fetchAll();

        } catch (Throwable $e) {
            throw new StorageException('Nie udało się pobrać notatek', 400, $e);
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
}
