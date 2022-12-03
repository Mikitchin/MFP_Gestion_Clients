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

            // return $this->redirectToRoute('demande', ['slug' => $demande->getSlug()]);
        }

        return $this->render('usager/rdv_form.html.twig', [
            'demande_form' => $form->createView(),

        ]);
    }
}
