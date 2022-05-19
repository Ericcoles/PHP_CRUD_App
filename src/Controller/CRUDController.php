<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CRUDController extends AbstractController
{
    #[Route('/crud/list', name: 'c_r_u_d')]
    public function index(): Response
    {
        return $this->render('crud/index.html.twig');
    }
    #[Route('/create', name: 'create_task', methods: ['POST'])]
    public function create(): Response
    {
        exit('crud to do: create a new task');
    }

    #[Route('/update/{id}', name: 'update_task')]
    public function update($id): Response
    {
        exit('crud update task: update a new task' . $id);
    }

    #[Route('/delete/{id}', name: 'delete_task')]
    public function delete($id): Response
    {
        exit('crud delete task: delete a new task' . $id);
    }
}
