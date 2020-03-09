<?php

declare(strict_types=1);

namespace App;

class Request
{
    private array $get = [];
    private array $post = [];
    private array $server = [];

    public function __construct(array $get, array $post, array $server)
    {
        $this->get = $get;
        $this->post = $post;
        $this->server = $server;
    }

    public function isPost(): bool
    {
        return $this->server['REQUEST_METHOD'] === 'POST';
    }

    public function isGet(): bool
    {
        return $this->server['REQUEST_METHOD'] === 'GET';
    }

    public function hasGetParam(string $key): bool
    {
        return !empty($this->get[$key]);
    }

    public function getParam(string $key, $default = null)
    {
        return $this->get[$key] ?? $default;
    }

    public function postParam(string $key, $default = null)
    {
        return $this->post[$key] ?? $default;
    }

    public function getParams(): array
    {
        return $this->get;
    }

    public function postParams(): array
    {
        return $this->post;
    }
}
