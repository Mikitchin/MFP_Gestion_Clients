<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsagerController extends AbstractController
{
    #[Route('/resultat-traitement', name: 'app_result-traite')]
    public function homeu(Request $request, DemandeRdvRepository $repo): Response
    {
        $demandeRdv = new DemandeRdv();
        $user = $this->getUser();
        $demande = $repo->findBy(array('users' => $user));
        // $demande = $repo->findAll();

        return $this->render('usager/notification_demande.html.twig', [
            'demande' => $demande,

        ]);
    }

    // #[Route('/prendre-rdv', name: 'app_creat_rdv')]
    // public function prdv(): Response
    // {
    //     return $this->render('usager/rdv_form.html.twig', [
    //         'controller_name' => 'UsagerController',
    //     ]);
    // }

    // #[Route('/liste-rdv', name: 'app_liste_rdv')]
    // public function lsrdv(): Response
    // {
    //     return $this->render('usager/rdv_liste.html.twig', [
    //         'controller_name' => 'UsagerController',
    //     ]);
    // }
}
