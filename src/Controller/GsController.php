<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GsController extends AbstractController
{
    #[Route('/gest', name: 'app_gesthome')]
    public function index(): Response
    {
        return $this->render('gestionnaire/index.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/gest_demandes', name: 'app_ges_dem')]
    public function ges_dem(): Response
    {
        return $this->render('gestionnaire/demandes.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/gest_traitement', name: 'app_ges_treat')]
    public function ges_treat(): Response
    {
        return $this->render('gestionnaire/traitements.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/rdv_gestionnaire', name: 'app_rdv_gest')]
    public function rdv_gest(): Response
    {
        return $this->render('gestionnaire/rdv_gest.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/list_demande_gestionnaire', name: 'app_lst_dem_gest')]
    public function lst_dem_gest(): Response
    {
        return $this->render('gestionnaire/list_demande_gestionnaire.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }
   
}
