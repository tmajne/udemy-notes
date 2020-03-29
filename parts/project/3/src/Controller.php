<?php

declare(strict_types=1);

namespace App;

require_once 'View.php';

use App\View;

class Controller
{
    private const ACTION_DEFAULT = 'list';

    private array $request;

    private View $view;

    public function __construct(array $request)
    {
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
