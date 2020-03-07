<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database;
use App\Exception\ConfigException;
use App\Request;
use App\View;

abstract class AbstractController
{
    private const ACTION_DEFAULT = 'list';

    private static array $config = [];

    protected Database $db;
    protected Request $request;
    protected View $view;

    public static function initConfiguration(array $config): void
    {
        self::$config = $config;
    }
    
    public function __construct(Request $request)
    {
        if (empty(self::$config['db'])) {
            throw new ConfigException('Database config missing');
        }
        $this->db = new Database(self::$config['db']);

        $this->view = new View();
        $this->request = $request;    
    }

    public function run(): void
    {
        $action = $this->action();
        $actionName = $action.'Action';
        if (!\method_exists($this, $actionName)) {
            $actionName = self::ACTION_DEFAULT.'Action';
        }
        $this->$actionName();
    }

    private function action(): string
    {
        return $_GET['action'] ?? self::ACTION_DEFAULT;
    }
}
