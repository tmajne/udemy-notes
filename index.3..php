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

switch ($action) {
    case 'create':
        $page = 'create';
        $viewParams['created'] = false;

        if (!empty($_POST)) {
            $viewParams = [
                'created' => true,
                'title' => htmlentities($_POST['title']),
                'description' => htmlentities($_POST['description'])
            ];
        }

        break;
    default:
        $page = 'list';
        break;
}


$view->render($page, $viewParams);
