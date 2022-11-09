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

    

    // #[Route('/creer_rdv', name: 'app_createrdv')]
    // public function ardv(): Response
    // {
    //     return $this->render('agent/rdv_form.html.twig', [
    //         'controller_name' => 'AgentController',
    //     ]);
    // }
    
    // #[Route('/afficher_rdv', name: 'app_listrdv')]
    // public function lrdv(): Response
    // {
    //     return $this->render('agent/rdvlist.html.twig', [
    //         'controller_name' => 'AgentController',
    //     ]);
    // }

    // #[Route('/stats_rdv', name: 'app_statsrdv')]
    // public function srdv(): Response
    // {
    //     return $this->render('agent/stats.html.twig', [
    //         'controller_name' => 'AgentController',
    //     ]);
    // }
   
}
