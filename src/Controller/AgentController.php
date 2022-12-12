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

<<<<<<< HEAD
    #[Route('/afficher_la_liste_des_rdv', name: 'app_alistrdv')]
=======
    #[Route('/creer-rdv', name: 'app_createrdv')]
    public function ardv(): Response
    {
        return $this->render('agent/rdv_form.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/afficher-rdv', name: 'app_listrdv')]
>>>>>>> 5336e098af208eafd56da49e5086e8708d147e4e
    public function lrdv(): Response
    {
        return $this->render('agent/rdvlist.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

<<<<<<< HEAD
    #[Route('/afficher_les_statistiques_des_rdv', name: 'app_astatsrdv')]
    public function astatrdv(): Response
=======
    #[Route('/stats-rdv', name: 'app_statsrdv')]
    public function srdv(): Response
>>>>>>> 5336e098af208eafd56da49e5086e8708d147e4e
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
