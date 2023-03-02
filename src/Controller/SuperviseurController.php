<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SuperviseurController extends AbstractController
{
    #[Route('/superviseur', name: 'app_suphome')]
    public function index(): Response
    {
        return $this->render('superviseur/home_sup.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }

    #[Route('/demande-mod', name: 'app_dem_modif')]
    public function lstdem(User $user = Null, UserRepository $repo, Request $request): Response
    {
        $user = new User();
        $user = $this->getUser();
        return $this->render('base.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/traitement-sup', name: 'app_listtreat')]
    public function listtreat(): Response
    {
        return $this->render('superviseur/traitements.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }

    #[Route('/statistiques-sup', name: 'app_statsrdvsup')]
    public function statsrdvsup(): Response
    {
        return $this->render('superviseur/statsrdv_sup.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }

    #[Route('/info-recept-sup', name: 'app_inforecep')]
    public function inforecep(): Response
    {
        return $this->render('superviseur/sup_info_recep.html.twig', [
            'controller_name' => 'SuperviseurController',
        ]);
    }
}
