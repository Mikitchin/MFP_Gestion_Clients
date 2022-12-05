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

<<<<<<< HEAD
    #[Route('/gest-demande', name: 'app_ges_dem')]
=======
    #[Route('/liste-des-demandes-de-rendez-vous', name: 'app_ges_dem')]
>>>>>>> ba756c9a1fdb68e71fdd24f5f089064cc35e5d92
    public function ges_dem(): Response
    {
        return $this->render('gestionnaire/demandes.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

<<<<<<< HEAD
    #[Route('/gest-traitement', name: 'app_ges_treat')]
=======
    #[Route('/visualisation-des-rdv-en-traitements', name: 'app_ges_treat')]
>>>>>>> ba756c9a1fdb68e71fdd24f5f089064cc35e5d92
    public function ges_treat(): Response
    {
        return $this->render('gestionnaire/traitements.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

<<<<<<< HEAD
    #[Route('/rdv-gestionnaire', name: 'app_rdv_gest')]
    public function rdv_gest(): Response
=======
    #[Route('/visualisation-des-informations-sur-un-traitement-RDV_30112022_001', name: 'app_ges_infotreat')]
    public function ges_infotreat(): Response
>>>>>>> ba756c9a1fdb68e71fdd24f5f089064cc35e5d92
    {
        return $this->render('gestionnaire/info_traitement.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

<<<<<<< HEAD
    #[Route('/liste-demande', name: 'app_lst_dem_gest')]
    public function lst_dem_gest(): Response
=======
    #[Route('/visualisation-des-statistiques-des-traitements', name: 'app_ges_stat')]
    public function ges_stat(): Response
>>>>>>> ba756c9a1fdb68e71fdd24f5f089064cc35e5d92
    {
        return $this->render('gestionnaire/statiStiques.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }
<<<<<<< HEAD
=======
   
   
>>>>>>> ba756c9a1fdb68e71fdd24f5f089064cc35e5d92
}
