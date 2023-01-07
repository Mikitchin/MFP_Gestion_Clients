<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function ges_dem(Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        $demandeRdv = new DemandeRdv();
        $demandeRdv = $repo->findAll();

        return $this->render('gestionnaire/demandes.html.twig', [
            'demandeRdv' => $demandeRdv,
        ]);
    }

    #[Route('/visualisation-des-rdv-en-traitements', name: 'app_ges_treat')]
    public function ges_treat(): Response
    {
        return $this->render('gestionnaire/traitements.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    // #[Route('/visualisation-des-informations-sur-un-traitement-RDV_30112022_001', name: 'app_ges_infotreat')]
    // public function ges_infotreat(): Response
    // {
    //     return $this->render('gestionnaire/info_traitement.html.twig', [
    //         'controller_name' => 'GsController',
    //     ]);
    // }

    #[Route('/statistiques-des-traitements', name: 'app_ges_stat')]
    public function ges_stat(): Response
    {
        return $this->render('gestionnaire/statistiques.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }
}
