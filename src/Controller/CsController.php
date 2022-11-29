<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CsController extends AbstractController
{
    #[Route('/cs', name: 'app_cshome')]
    public function index(): Response
    {
        return $this->render('chef_service/index.html.twig', [
            'controller_name' => 'CsController',
        ]);
    }

    #[Route('/cs-demandes', name: 'app_csdem')]
    public function lstdem(): Response
    {
        return $this->render('chef_service/cs_demandes.html.twig', [
            'controller_name' => 'CsController',
        ]);
    }

    #[Route('/cs-traitement', name: 'app_cstreat')]
    public function listtreat(): Response
    {
        return $this->render('chef_service/cs_traitement.html.twig', [
            'controller_name' => 'CsController',
        ]);
    }

    #[Route('/cs-statistiques', name: 'app_statsrdvcs')]
    public function statsrdvsup(): Response
    {
        return $this->render('chef_service/cs_statsrdv.html.twig', [
            'controller_name' => 'CsController',
        ]);
    }

    #[Route('/cs-info-recep', name: 'app_csinforecep')]
    public function inforecep(): Response
    {
        return $this->render('chef_service/cs_info_recep.html.twig', [
            'controller_name' => 'CsController',
        ]);
    }
}
