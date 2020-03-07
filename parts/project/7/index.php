<?php

declare(strict_types=1);

require_once('src/Utils/debug.php');
require_once('src/Controller.php');
require_once('src/Request.php');
require_once('src/Exception/AppException.php');
require_once('src/Exception/StorageException.php');

$configuration = require_once('config/config.php');

use App\Controller;
use App\Request;
use App\Exception\AppException;


try {
    Controller::initConfiguration($configuration);
    (new Controller(
        new Request($_GET, $_POST)
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