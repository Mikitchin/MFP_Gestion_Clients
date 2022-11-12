<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandeRdvController extends AbstractController
{
    #[Route('/demande/rdv', name: 'app_demande_rdv')]
    public function index(): Response
    {
        return $this->render('demande_rdv/index.html.twig', [
            'controller_name' => 'DemandeRdvController',
        ]);
    }
}
