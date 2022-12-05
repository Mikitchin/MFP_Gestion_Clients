<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Form\DemandeFormType;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DemandeRdvController extends AbstractController
{
    #[Route('/demande', name: 'app_demande_rdv')]
    public function index(Request $request, DemandeRdvRepository $demandeRdvRepository, EntityManagerInterface $entityManager): Response
    {
        $demande = new DemandeRdv();
        $form = $this->createForm(DemandeFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($demande);
            $entityManager->flush();

            return $this->redirectToRoute('app_liste_rdv');
        }

        return $this->render('usager/rdv_form.html.twig', [
            'demande_form' => $form->createView(),

        ]);
    }

    #[Route('/show_demande/{id}', name: 'app_show_demande')]
    public function demande(Request $request, EntityManagerInterface $entityManager, DemandeRdv $demande_rdv): Response
    {

        return $this->render('usager/show_demande.html.twig', [
            'demande_rdv' => $demande_rdv
        ]);
    }
}
