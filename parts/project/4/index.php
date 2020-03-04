<?php

declare(strict_types=1);

require_once('src/Utils/debug.php');
require_once('src/Controller.php');

use App\Controller;

$requestData = [
    'get' => $_GET,
    'post' => $_POST
];

(new Controller($requestData))->run();
