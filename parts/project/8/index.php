<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $pathToClass = str_replace(["\\", 'App/'], ["/", ""], $class);
    include __DIR__ . '/src/' . $pathToClass . '.php';
});

require_once('src/Utils/debug.php');

$configuration = require_once('config/config.php');

use App\Controller\Controller;
use App\Request;
use App\Exception\AppException;
use App\Exception\StorageException;


try {
    Controller::initConfiguration($configuration);
    (new Controller(
        new Request($_GET, $_POST, $_SERVER)
    ))->run();
} catch (AppException | StorageException $e) {
    echo "<h2>{$e->getMessage()}</h2>";
} catch (\Throwable $e) {
    echo '<h2>Global application error</h2>';
} finally {
    if (defined('ENV') && ENV === 'dev' && isset($e)) {
        dd($e);
    }
}
