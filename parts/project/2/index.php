<?php

declare(strict_types=1);

namespace App;

require_once('src/Utils/debug.php');
require_once('src/View.php');

const ACTION_DEFAULT = 'list';

$view = new View();
$viewParams = [];

//TODO: powiedzieć dlaczego $page brana bezpośrednio z action to nie jest dobry pomysł (możliwość hakowania)
$action = $_GET['action'] ?? ACTION_DEFAULT;

if ($action === 'create') {
    $page = 'create';
    $viewParams = [
        'createInfo' => 'Tutaj tworzymy nową notatkę'
    ];
} else {
    $page = 'list';
    $viewParams = [
        'listInfo' => 'Tutaj będziemy wyświetlać notatki'
    ];
}

$view->render($page, $viewParams);
