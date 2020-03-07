<?php

declare(strict_types=1);

namespace App;

require_once('Exception/ConfigException.php');
require_once('Exception/StorageException.php');

use PDO;
use PDOException;
use App\Exception\ConfigException;
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
