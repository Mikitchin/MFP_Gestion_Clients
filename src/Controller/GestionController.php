<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionController extends AbstractController
{
    #[Route('/gestionnaire', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('gestion/index.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    #[Route('/creer_profil', name: 'app_ajoutprofil')]
    public function aprofil(): Response
    {
        return $this->render('gestion/ajouter_profil.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    #[Route('/afficher_profil', name: 'app_profil')]
    public function profil(): Response
    {
        return $this->render('gestion/afficher_profil.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    #[Route('/gestion', name: 'app_gestion')]
    public function gestion(): Response
    {
        return $this->render('registration/login.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }
}
