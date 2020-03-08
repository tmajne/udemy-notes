<?php

declare(strict_types=1);

namespace App\Controller;

use App\Exception\ConfigException;
use App\Exception\NotFoundException;
use App\Exception\StorageException;
use App\Model\NoteModel;
use App\Request;
use App\View;

abstract class AbstractController
{
    private const ACTION_DEFAULT = 'list';

    private static array $config = [];

    protected NoteModel $noteModel;
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
        $this->noteModel = new NoteModel(self::$config['db']);

        $this->view = new View();
        $this->request = $request;    
    }

    public function run(): void
    {
        try {
            $action = $this->action();
            $actionName = $action.'Action';
            if (!\method_exists($this, $actionName)) {
                $actionName = self::ACTION_DEFAULT.'Action';
            }
            $this->$actionName();
        } catch (NotFoundException $e) {
            header('Location: /?error=noteNotFound');
        } catch (StorageException $e) {
            $this->view->render('error', ['errorMessage' => $e->getMessage()]);
        }
    }

    private function action(): string
    {
        return $this->request->getParam('action', self::ACTION_DEFAULT);
    }
}
