<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GsController extends AbstractController
{
    #[Route('/espace-gestionnaire', name: 'app_gesthome')]
    public function index(): Response
    {
        return $this->render('gestionnaire/index.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/liste-des-demandes-de-rendez-vous', name: 'app_ges_dem')]
    public function ges_dem(): Response
    {
        return $this->render('gestionnaire/demandes.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/visualisation-des-rdv-en-traitements', name: 'app_ges_treat')]
    public function ges_treat(): Response
    {
        return $this->render('gestionnaire/traitements.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/visualisation-des-informations-sur-un-traitement-RDV_30112022_001', name: 'app_ges_infotreat')]
    public function ges_infotreat(): Response
    {
        return $this->render('gestionnaire/info_traitement.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/visualisation-des-statistiques-des-traitements', name: 'app_ges_stat')]
    public function ges_stat(): Response
    {
        return $this->render('gestionnaire/statiStiques.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }
   
   
}
