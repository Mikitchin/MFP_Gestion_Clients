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
    // #[Route('/usager', name: 'app_uhome')]
    // public function homeu(Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    // {
    // $demandeRdv = new DemandeRdv();
    // $user = $this->getUser()->getId();
    // $demandeRdv = $repo->findBy(array('users' => $user));
    // $demande = $repo->findAll();

    // dd($demande);

    // return $this->render('usager/home.html.twig', [
    // 'demandeRdv' => $demandeRdv,

    // ]);
    // }

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
