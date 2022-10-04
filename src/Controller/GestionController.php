<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('gestion/index.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    #[Route('/gestion', name: 'app_gestion')]
    public function gestion(): Response
    {
        return $this->render('gestion/home-bkp.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }
}
