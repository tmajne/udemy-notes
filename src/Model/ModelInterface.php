<?php

declare(strict_types=1);

namespace App\Model;

interface ModelInterface
{
    public function get(int $id): array;

    public function create(array $data): void;

    public function update(int $id, array $data): void;

    public function delete(int $id): void;

    public function count(): int;

    public function searchCount(string $phrase): int;
    
    public function list(
        int $page = 1,
        int $size = 10,
        string $sortBy = 'created',
        string $sortOrder = 'desc'
    ): array;

    public function search(
        string $phrase,
        int $page = 1,
        int $size = 10,
        string $sortBy = 'created',
        string $sortOrder = 'desc'
    ): array;
}
