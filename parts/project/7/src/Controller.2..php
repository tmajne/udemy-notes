<?php

declare(strict_types=1);

namespace App;

require_once 'Database.php';
require_once 'View.php';
require_once 'Exception/ConfigException.php';
require_once('Exception/NotFoundException.php');

use App\Exception\ConfigException;
use App\Exception\NotFoundException;
use App\Database;
use App\View;

class Controller
{
    private const ACTION_DEFAULT = 'list';

    private static array $config = [];

    private Database $db;
    private Request $request;
    private View $view;

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

    public function listAction(): void
    {
        $page = 'list';
        $viewParams = [
            'before' => $this->request->getParam('before'),
            'error' => $this->request->getParam('error'),
            'notes' => $this->db->getNotes()
        ];

        $this->view->render($page, $viewParams);
    }

    public function showAction(): void
    {
        $page = 'show';
        $noteId = (int) $this->request->getParam('id');
        if (!$noteId) {
            header('Location: /?error=noteIdMissing');
        }

        try {
            $note = $this->db->getNote($noteId);
            $viewParams['note'] = $note;
        } catch (NotFoundException $e) {
            header('Location: /?error=noteNotFound');
        }
        $this->view->render($page, $viewParams);
    }

    public function createAction(): void
    {
        $page = 'create';
        $viewParams['created'] = false;
        $postData = $this->request->postParams();
        
        if (!empty($postData)) {
            $data = [
                'title' => $postData['title'],
                'description' => $postData['description']
            ];
            $this->db->createNote($data);
            header('Location: /?before=created');
        }
        $this->view->render($page, $viewParams);
    }

    public function run(): void
    {
        $action = $this->action();

        $viewParams = [];
        switch ($action) {
            case 'show':
                $this->showAction();
                break;
            case 'create':
                $this->createAction();
                break;
            default:
                $this->listAction();
                break;
        }
    }

    private function action(): string
    {
        return $_GET['action'] ?? self::ACTION_DEFAULT;
    }
}
