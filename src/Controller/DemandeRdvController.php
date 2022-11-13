<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Repository\DemandeRdvRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandeRdvController extends AbstractController
{
    #[Route('/demande/{id}', name: 'app_demande_rdv')]
    public function index(DemandeRdv $demande, DemandeRdvRepository $demandeRdvRepository): Response
    {
        return $this->render('demande_rdv/index.html.twig', [
            'demande' => $demande,

        ]);
    }
}
