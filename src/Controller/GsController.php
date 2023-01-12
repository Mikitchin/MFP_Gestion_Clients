<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Form\TraiteGestFormType;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EtatDemandeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GsController extends AbstractController
{
    #[Route('/espace-gestionnaire', name: 'app_gesthome')]
    public function index(): Response
    {
        return $this->render('gestionnaire/index.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/liste-des-demandes-de-rendez-vous', name: 'app_ges_dem')]
    public function ges_dem(Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        $demandeRdv = new DemandeRdv();
        $demandeRdv = $repo->findAll();

        return $this->render('gestionnaire/demandes.html.twig', [
            'demandeRdv' => $demandeRdv,
        ]);
    }

    #[Route('/visualisation-des-rdv-en-traitements', name: 'app_ges_treat')]
    public function ges_treat(): Response
    {
        return $this->render('gestionnaire/traitements.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/traitement-gestionnaire/{id}', name: 'app_ges_trait')]
    // public function ges_infotreat(): Response
    public function ges_treat_demande(DemandeRdv $demande, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {

        $etat = $response->findOneBy(['id' => 5]);
        $demande->setEtatDemandes($etat);

        $entityManager->persist($demande);
        $entityManager->flush();
        // Récupérons l'id pour la mise à jour de l'état de l'agent (Rendez-vous honoré)
        $etatDemandes = $response->findOneBy(['id' => 6]);
        // dd($etatDemandes);
        $form = $this->createForm(TraiteGestFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $demande->setEtatDemandes($etatDemandes);

            $entityManager->persist($demande);
            $entityManager->flush();

            $this->addFlash('success', 'La demande a été traitée avec succès !');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('app_home');
        }

        return $this->render('gestionnaire/info_traitement_gs.html.twig', [
            'form' => $form->createView(),
            'demande' => $demande,

        ]);
    }

    #[Route('/statistiques-des-traitements', name: 'app_ges_stat')]
    public function ges_stat(): Response
    {
        return $this->render('gestionnaire/statistiques.html.twig', [
            'controller_name' => 'GsController',
        ]);
    }

    #[Route('/cancel-demande/{id}', name: 'app_cancel_demande')]

    public function annule_demande_gest(DemandeRdv $demande, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {
        // Récupérons l'id pour la mise à jour de l'état de l'agent (état terminé)
        $etatDemandes = $response->findOneBy(['id' => 2]);

        $demande->setEtatDemandes($etatDemandes);

        $entityManager->persist($demande);
        $entityManager->flush();

        $this->addFlash('success', 'La demande a été transférée avec succès !');

        // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
        return $this->redirectToRoute('app_home');
    }
}
