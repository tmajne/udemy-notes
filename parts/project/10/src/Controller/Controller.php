<?php

declare(strict_types=1);

namespace App\Controller;

use App\Exception\NotFoundException;

class Controller extends AbstractController
{
    public function listAction(): void
    {
        $sortBy = $this->request->getParam('sortby') ?? 'created';
        $sortOrder = $this->request->getParam('sortorder') ?? 'desc';
        
        $viewParams = [
            'before' => $this->request->getParam('before'),
            'error' => $this->request->getParam('error'),
            'sort' => [
                'by' => $sortBy,
                'order' => $sortOrder
            ],
            'notes' => $this->db->getNotes($sortBy, $sortOrder)
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

    public function editAction(): void
    {
        if (!$this->request->isPost()) {
            if (!$this->request->hasGetParam('id')) {
                header('Location: /?error=noteIdMissing');
            }
            $noteId = (int) $this->request->getParam('id');
            $this->view->render(
                'edit', 
                ['note' => $this->db->getNote($noteId)]
            );
        } else {
            $params = $this->request->postParams();
            $this->db->editNote(
                (int) $params['id'],
                [
                    'title' => $_POST['title'],
                    'description' => $_POST['description']
                ]
            );

            header('Location: /?before=edited');
        }
    }

    public function deleteAction(): void
    {
        if (!$this->request->isPost()) {
            if (!$this->request->hasGetParam('id')) {
                header('Location: /?error=noteIdMissing');
            }
            $noteId = (int) $this->request->getParam('id');
            $this->view->render(
                'delete', 
                ['note' => $this->db->getNote($noteId)]
            );
        } else {
            $noteId = (int) $this->request->postParam('id');
            $this->db->deleteNote($noteId);
            header('Location: /?before=deleted');
        }
    }
}
