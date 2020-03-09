<?php

declare(strict_types=1);

namespace App\Controller;

class Controller extends AbstractController
{
    public function listAction(): void
    {
        $phrase = $this->request->getParam('phrase');
        $pageNumber = (int) $this->request->getParam('page', 1);
        $pageSize = (int) $this->request->getParam('pagesize', 10);
        $sortBy = $this->request->getParam('sortby', 'created');
        $sortOrder = $this->request->getParam('sortorder', 'desc');

        $pageNumber = $pageNumber > 0 ? $pageNumber : 1;
        if (!in_array($pageSize, [1, 5, 10, 20])) {
            $pageSize = 10;
        }

        if (empty($phrase)) {
            $notes = $this->noteModel->list($pageNumber, $pageSize, $sortBy, $sortOrder);
            $count = $this->noteModel->count();
        } else {
            $notes = $this->noteModel->search($phrase, $pageNumber, $pageSize, $sortBy, $sortOrder);
            $count = $this->noteModel->searchCount($phrase);
        }
        
        $viewParams = [
            'notes' => $notes,
            'phrase' => $phrase,
            'before' => $this->request->getParam('before'),
            'error' => $this->request->getParam('error'),
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

        $this->view->render('list', $viewParams);
    }

    public function showAction(): void
    {
        if (!$this->request->hasGetParam('id')) {
            header('Location: /?error=noteIdMissing');
        }

        $noteId = (int) $this->request->getParam('id');
        $note = $this->noteModel->get($noteId);
        $viewParams['note'] = $note;
        $this->view->render('show', $viewParams);
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
            $this->noteModel->create($data);
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
                ['note' => $this->noteModel->get($noteId)]
            );

        } else {

            $this->noteModel->update(
                (int) $this->request->postParam('id'),
                [
                    'title' => $this->request->postParam('title'),
                    'description' => $this->request->postParam('description')
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
                ['note' => $this->noteModel->get($noteId)]
            );
        } else {
            $noteId = (int) $this->request->postParam('id');
            $this->noteModel->delete($noteId);
            header('Location: /?before=deleted');
        }
    }
}
