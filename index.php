<?php

declare(strict_types=1);

require_once('src/Utils/debug.php');
require_once('src/Controller.php');
require_once('src/Exception/AppException.php');

$configuration = require_once('config/config.php');

use App\Controller;
use App\Exception\AppException;

$requestData = [
    'get' => $_GET,
    'post' => $_POST
];

try {
    Controller::initConfiguration($configuration);
    (new Controller($requestData))->run();
} catch (AppException $e) {
    echo "<h2>{$e->getMessage()}</h2>";
} catch (\Throwable $e) {
    //TODO: pomyśleć nad ustawieniami środowiskowymi
    //INFO: problem z systemowymi komunikatami
    echo '<h2>Global application error</h2>';
}