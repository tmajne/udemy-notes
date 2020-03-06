<?php

declare(strict_types=1);

namespace App;

require_once 'Database.php';
require_once 'View.php';
require_once 'Exception/ConfigException.php';

use App\Exception\ConfigException;
use App\Database;
use App\View;

class Controller
{
    private const ACTION_DEFAULT = 'list';

    private static array $config = [];

    private Database $db;

    private array $request;

    private View $view;

    public static function initConfiguration(array $config): void
    {
        self::$config = $config;
    }

    public function __construct(array $request)
    {
        if (empty(self::$config['db'])) {
            throw new ConfigException('Database config missing');
        }

        $this->db = new Database(self::$config['db']);
        $this->request = $request;    
        $this->view = new View();
    }

    public function run(): void
    {
        $action = $this->action();
        $viewParams = [];
        
        switch ($action) {
            case 'create':
                $page = 'create';
                $viewParams['created'] = false;
                $postData = $this->requestPostData();
        
                if (!empty($postData)) {
                    $viewParams = [
                        'created' => true,
                        'title' => htmlentities($postData['title']),
                        'description' => htmlentities($postData['description'])
                    ];
                }
        
                break;
            default:
                $page = 'list';
                break;
        }

        $this->view->render($page, $viewParams);
    }

    private function action(): string
    {
        return $_GET['action'] ?? self::ACTION_DEFAULT;
    }

    private function requestGetData(): array
    {
        return $this->request['get'] ?? [];
    }

    private function requestPostData(): array
    {
        return $this->request['post'] ?? [];
    }
}