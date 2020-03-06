<?php

declare(strict_types=1);

namespace App;

use PDO;

class Database
{
    /** @var string */
    private $config;

    /** @var PDO */
    private $db;

    public function __construct(array $config)
    {
        /*try {
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
        }*/
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

    private function validateConfig(array $config): bool
    {
        return true;
    }
}
