<?php

declare(strict_types=1);

namespace App;

require_once('src/Utils/debug.php');

//TODO: co to jest action?
//TODO: powiedzieć dlaczego $page brana bezpośrednio z action to nie jest dobry pomysł (możliwość hakowania)
$action = !empty($_GET['action']) ? $_GET['action'] : null;

if ($action === 'create') {
    include_once 'templates/pages/full/create.php';
} else {
    include_once 'templates/pages/full/list.php';
}