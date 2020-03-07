<?php

declare(strict_types=1);

namespace App;

class Request
{
    private array $getParams = [];
    private array $postParams = [];

    public function __construct(array $get, array $post)
    {
        $this->getParams = $get;
        $this->postParams = $post;
    }

    public function getParam(string $key)
    {
        return $this->getParams[$key] ?? null;
    }

    public function postParam(string $key)
    {
        return $this->postParams[$key] ?? null;
    }

    public function getParams(): array
    {
        return $this->getParams;
    }

    public function postParams(): array
    {
        return $this->postParams;
    }
}
