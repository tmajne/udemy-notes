<?php

declare(strict_types=1);

namespace App;

class View
{
    private $templatePath = "../templates/";

    public function render(string $page, array $params)
    {
        $params = $this->escape($params);
        require_once __DIR__ . '/' . $this->templatePath . 'layout.php';
    }

    private function escape(array $params): array
    {
        $escapeParams = [];
        foreach ($params as $key => $param) {
            if (\is_array($param)) {
                $escapeParams[$key] = $this->escape($param);
            } elseif ($param) {
                $escapeParams[$key] = \htmlentities($param);
            } else {
                $escapeParams[$key] = $param;
            }
        }

        return $escapeParams;
    }
}
