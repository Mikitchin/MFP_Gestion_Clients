<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;


class GestionController extends AbstractController
{
    #[Route('/gestionnaire', name: 'app_home')]
    public function index(): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('agent/index.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_GEST')) {
            return $this->render('gestionnaire/index.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_SUPERVISEUR')) {
            return $this->render('superviseur/home_sup.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_AGENT_ACCUEIL')) {
            return $this->render('agent/index.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_CHEF_SERVICE')) {
            return $this->render('chef_service/index.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            return $this->render('usager/home.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }
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
