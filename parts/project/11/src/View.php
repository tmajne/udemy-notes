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
            switch(true) {
                case \is_array($param):
                    $escapeParams[$key] = $this->escape($param);
                    break;
                case \is_numeric($param):
                    $escapeParams[$key] = 1 * $param;
                    break;
                case \is_string($param):
                    $escapeParams[$key] = \htmlentities($param);
                    break;
                default:
                    // bool, objects
                    $escapeParams[$key] = $param;
                    break;
            }
        }

        return $escapeParams;
    }
}
