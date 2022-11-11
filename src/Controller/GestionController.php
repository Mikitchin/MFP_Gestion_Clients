<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionController extends AbstractController
{
    if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
        return $this->render('agent/index.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    if ($this->container->get('security.authorization_checker')->isGranted('ROLE_GEST')) {
        return $this->render('gestion/index.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    if ($this->container->get('security.authorization_checker')->isGranted('ROLE_SUPERVISEUR')) {
        return $this->render('superviseur/home_sup.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USAGER_CLIENT')) {
        return $this->render('usager/welcome.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }
    if ($this->container->get('security.authorization_checker')->isGranted('ROLE_AGENT_ACCUEIL')) {
        return $this->render('agent/index.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }


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
