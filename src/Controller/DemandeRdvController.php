<?php

namespace App\Controller;

use Datetime;
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
    #[Route('/demande/{id}/edit', name: 'edit_demande_rdv')]

    public function index(Request $request, DemandeRdv $demande, DemandeRdvRepository $demandeRdvRepository, EntityManagerInterface $entityManager): Response
    {
        if (!$demande) {
            $demande = new DemandeRdv();
        }
        $form = $this->createForm(DemandeFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$demande->getId()) {
                $demande->setCreatedAt = new \Datetime();
            }


            $entityManager->persist($demande);
            $entityManager->flush();

            return $this->redirectToRoute('app_liste_rdv', ['id' => $demande->getId()]);
        }

        return $this->render('usager/rdv_form.html.twig', [
            'demande_form' => $form->createView(),
            'editMode' => $demande->getId() !== null,
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
