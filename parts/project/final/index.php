<?php

declare(strict_types=1);

namespace App;

require_once('src/Utils/debug.php');

const ACTION_DEFAULT = 'list';

$config = require_once "./src/config.php";
// pobranie elementu tablicy

try {
    $view = new View();
    $viewParams = [];

    $dbConfig = $config['db'];
    $db = new Database($dbConfig);

    //TODO: powiedzieć dlaczego $page brana bezpośrednio z action to nie jest dobry pomysł (możliwość hakowania)
    $action = $_GET['action'] ?? ACTION_DEFAULT;
    switch ($action) {
        case 'show':
            $page = 'show';
            $noteId = (int) $_GET['id'];
            $note = $db->getNote($noteId);
            $viewParams['note'] = $note;
            break;
        case 'create':
            $page = 'create';
            if (!empty($_POST)) {
                $data = [
                    'title' => $_POST['title'],
                    'description' => $_POST['description']
                ];
                $db->createNote($data);
                header('Location: /?before=created');
            }
            break;
        case 'edit':
            $page = 'edit';
            if (empty($_POST)) {
                $noteId = (int) $_GET['id'];
                $note = $db->getNote($noteId);
                $viewParams['note'] = $note;
            } else {
                $noteId = (int) $_POST['id'];
                $data = [
                    'title' => $_POST['title'],
                    'description' => $_POST['description']
                ];
                $db->editNote($noteId, $data);
                header('Location: /?before=edited');
            }
            break;
        case 'delete':
            $page = 'delete';
            if (empty($_POST)) {
                $noteId = (int) $_GET['id'];
                $note = $db->getNote($noteId);
                $viewParams['note'] = $note;
            } else {
                $noteId = (int) $_POST['id'];
                $db->deleteNote($noteId);
                header('Location: /?before=deleted');
            }
            break;
        default:
            $page = 'list';

            $pageNumber = $_GET['page'] ?? 1;
            $pageSize = $_GET['pagesize'] ?? 10;
            $phrase = $_GET['phrase'] ?? null;
            $sortBy = $_GET['sortby'] ?? 'created';
            $sortOrder = $_GET['sortorder'] ?? 'desc';

            if ($pageNumber <= 0) {
                $pageNumber = 1;
            }
            if (!in_array($pageSize, [1, 5, 10, 20])) {
                $pageSize = 10;
            }

            if ($phrase === null) {
                $notes = $db->getNotes($pageNumber, $pageSize, $sortBy, $sortOrder);
                $count = $db->getCount();
            } else {
                $notes = $db->searchNotes($phrase, $pageNumber, $pageSize, $sortBy, $sortOrder);
                $count = $db->getSearchCount($phrase);
            }

            $viewParams = [
                'notes' => $notes,
                'before' => $_GET['before'] ?? null,
                'phrase' => $phrase,
                'sort' => [
                    'by' => $sortBy,
                    'order' => $sortOrder
                ],
                'pagination' => [
                    'page' => $pageNumber,
                    'size' => $pageSize,
                    'pages' => ceil($count/$pageSize),
                ]
            ];
            break;
    }

    $view->render($page, $viewParams);
} catch (Throwable $e) {
    dump($e);
    $view = new View();
    $view->render('error', ['errorMessage' => $e->getMessage()]);
}






function dump($var): void
{
    dd($var, false);
}

function dd($var, $exit = true): void
{
    echo '<br/>';
    echo '<div
        style="
            display: inline-block;
            padding: 1px 10px;
            border: 1px solid gray;
            background: lightgray;
        "
    >';
        echo '<pre>';
            echo __FILE__ . ': '. __LINE__ . "\n";
            print_r($var);
        echo '</pre>';
    echo '</div>';
    echo '<br/>';
    if ($exit) {
        exit;
    }
}