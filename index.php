<?php

declare(strict_types=1);

namespace App;

require_once('src/Utils/debug.php');

//$view = new View();

const ACTION_DEFAULT = 'list';

$viewParams = [];

//TODO: powiedzieć dlaczego $page brana bezpośrednio z action to nie jest dobry pomysł (możliwość hakowania)
$action = $_GET['action'] ?? ACTION_DEFAULT;
switch ($action) {
    case 'create':
        $page = 'create';
        break;
    default:
        $page = 'list';
        break;
}

//$view->render($page, $viewParams);
