<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends AbstractController
{
    #[Route('/espace_agent_d_accueil', name: 'app_ahome')]
    public function index(): Response
    {
        return $this->render('agent/index.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/creer-rdv', name: 'app_createrdv')]
    public function ardv(): Response
    {
        return $this->render('agent/rdv_form.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/afficher-rdv', name: 'app_listrdv')]
    public function lrdv(): Response
    {
        return $this->render('agent/rdvlist.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/stats-rdv', name: 'app_statsrdv')]
    public function srdv(): Response
    {
        return $this->render('agent/stats.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/prise_de_rdv_agent_d_accueil', name: 'app_rdv_agt')]
    public function rdv_agt(): Response
    {
        return $this->render('agent/rdv_form.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/list_rdv_agent', name: 'app_lst_dem_agt')]
    public function lst_dem_agt(): Response
    {
        return $this->render('agent/rdvlist.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }
}
