<?php

declare(strict_types=1);

namespace App\Model;

use PDO;
use PDOException;
use App\Exception\ConfigException;
use App\Exception\StorageException;

abstract class AbstractModel
{
    protected PDO $connection;

    public function __construct(array $config)
    {
        $this->validateConfiguration($config);
        $this->connection = $this->createConnection($config);
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
