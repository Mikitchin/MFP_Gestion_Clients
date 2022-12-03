<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsagerController extends AbstractController
{
    #[Route('/usager', name: 'app_uhome')]
    public function homeu(): Response
    {
        return $this->render('usager/home.html.twig', [
            'controller_name' => 'UsagerController',
        ]);
    }

    // #[Route('/prendre-rdv', name: 'app_creat_rdv')]
    // public function prdv(): Response
    // {
    //     return $this->render('usager/rdv_form.html.twig', [
    //         'controller_name' => 'UsagerController',
    //     ]);
    // }

    #[Route('/liste-rdv', name: 'app_listerdv')]
    public function lsrdv(): Response
    {
        return $this->render('usager/rdvulist.html.twig', [
            'controller_name' => 'UsagerController',
        ]);
    }
}
