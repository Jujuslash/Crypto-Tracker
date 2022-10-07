<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function index() : Response
    {
        return new Response(content: 'Hello World');
    }

    public function contact(): Response
    {
        return $this->render(view: 'default/contact.html.twig', parameters: [
            'name'=> 'Julien',
        ]);
    }
}