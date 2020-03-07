<?php

declare(strict_types=1);

namespace App;

require_once 'AbstractController.php';
require_once('Exception/NotFoundException.php');

use App\Exception\NotFoundException;

class Controller extends AbstractController
{
    public function listAction(): void
    {
        $viewParams = [
            'before' => $this->request->getParam('before'),
            'error' => $this->request->getParam('error'),
            'notes' => $this->db->getNotes()
        ];

        $this->view->render('list', $viewParams);
    }

    public function showAction(): void
    {
        if (!$this->request->hasGetParam('id')) {
            header('Location: /?error=noteIdMissing');
        }

        try {
            $noteId = (int) $this->request->getParam('id');
            $note = $this->db->getNote($noteId);
            $viewParams['note'] = $note;
            $this->view->render('show', $viewParams);
        } catch (NotFoundException $e) {
            header('Location: /?error=noteNotFound');
        }
    }

    public function createAction(): void
    {
        $viewParams = [
            'created' => false
        ];

        $postData = $this->request->postParams();
        if (!empty($postData)) {
            $data = [
                'title' => $postData['title'],
                'description' => $postData['description']
            ];
            $this->db->createNote($data);
            header('Location: /?before=created');
        }

        $this->view->render('create', $viewParams);
    }
}
