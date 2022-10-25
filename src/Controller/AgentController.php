<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends AbstractController
{
    #[Route('/agent', name: 'app_ahome')]
    public function index(): Response
    {
        return $this->render('agent/index.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/creer_rdv', name: 'app_createrdv')]
    public function ardv(): Response
    {
        return $this->render('agent/rdv_form.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }
    
    #[Route('/afficher_rdv', name: 'app_listrdv')]
    public function lrdv(): Response
    {
        return $this->render('agent/rdvlist.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/stats_rdv', name: 'app_statsrdv')]
    public function srdv(): Response
    {
        return $this->render('agent/stats.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }
   
}
