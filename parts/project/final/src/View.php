<?php

declare(strict_types=1);

namespace App;

class View
{
    private $templatePath = "../templates/";

    public function render(string $page, array $params)
    {
        //TODO: dodac sprawdzanie wymaganych parametrow

        require_once __DIR__ . '/' . $this->templatePath . 'layout.php';
    }
}
