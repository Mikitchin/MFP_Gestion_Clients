<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuperviseurController extends AbstractController
{
    #[Route('/superviseur', name: 'app_suphome')]
    public function index(): Response
    {
        return $this->render('superviseur/home_sup.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }

    #[Route('/superviseur_demandes', name: 'app_lstdem')]
    public function lstdem(): Response
    {
        return $this->render('superviseur/demandes.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }

    #[Route('/superviseur_traitement', name: 'app_listtreat')]
    public function listtreat(): Response
    {
        return $this->render('superviseur/traitements.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }

    #[Route('/superviseur_statistiques', name: 'app_statsrdvsup')]
    public function statsrdvsup(): Response
    {
        return $this->render('superviseur/statsrdv_sup.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }

    #[Route('/superviseur_inforecep', name: 'app_inforecep')]
    public function inforecep(): Response
    {
        return $this->render('superviseur/sup_info_recep.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }
   
}
