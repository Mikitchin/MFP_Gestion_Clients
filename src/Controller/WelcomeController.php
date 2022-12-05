<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_cruchome')]
    public function accueil(): Response
    {
        return $this->render('welcome.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }
}
