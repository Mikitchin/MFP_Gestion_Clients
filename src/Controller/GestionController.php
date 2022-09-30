<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionController extends AbstractController
{
    #[Route('/gestion', name: 'app_gestion')]
    public function index(): Response
    {
        return $this->render('gestion/index.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    } 
    
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('gestion/home.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }


}
