<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Entity\Reclamation;
use App\Entity\DemandeSearch;
use App\Form\DemandeSearchType;
use App\Form\TraiteGestFormType;
use App\Form\TraiteGestReclamFormType;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EtatDemandeRepository;
use App\Repository\ReclamationRepository;
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
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $demandeRdv = new DemandeRdv();
        $demandeRdv = $repo->findAll();

        return $this->render('gestionnaire/demandes.html.twig', [
            'demandeRdv' => $demandeRdv,
            'user' => $user,
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
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $etat = $response->findOneBy(['id' => 10]);
        $demande->setEtatDemandes($etat);

        $entityManager->persist($demande);
        $entityManager->flush();
        // Récupérons l'id pour la mise à jour de l'état de l'agent (Rendez-vous honoré)
        $etatDemandes = $response->findOneBy(['id' => 8]);
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
            'user' => $user
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
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        // Récupérons l'id pour la mise à jour de l'état de l'agent (état terminé)
        $etatDemandes = $response->findOneBy(['id' => 2]);

        $demande->setEtatDemandes($etatDemandes);

        $entityManager->persist($demande);
        $entityManager->flush();

        $this->addFlash('success', 'La demande a été transférée avec succès !');

        // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
        return $this->redirectToRoute('app_home');
    }

    #[Route('/gestionnaire-reclamation', name: 'app_gest_reclamation')]
    public function gest_reclame(Reclamation $reclame = Null, Request $request, EntityManagerInterface $entityManager, ReclamationRepository $repo): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $reclame = new Reclamation();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $reclame = [];
        $reclame = $repo->findRecByFieldGest();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('gestionnaire/index_agent_reclamation.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }

    #[Route('/gestionnaire-reclamation-dgapce', name: 'app_gest_reclamation_dir_2')]
    public function gest_dir_deux_reclame(Reclamation $reclame = Null, Request $request, EntityManagerInterface $entityManager, ReclamationRepository $repo): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $reclame = new Reclamation();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $reclame = [];
        $reclame = $repo->findRecByFieldGest_2();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('gestionnaire/index_agent_reclamation.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }

    #[Route('/gestionnaire-reclamation-drh', name: 'app_gest_reclamation_dir_3')]
    public function gest_dir_3_reclame(Reclamation $reclame = Null, Request $request, EntityManagerInterface $entityManager, ReclamationRepository $repo): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $reclame = new Reclamation();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $reclame = [];
        $reclame = $repo->findRecByFieldGest_3();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('gestionnaire/index_agent_reclamation.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }

    #[Route('/traitement-reclamation-gest/{id}', name: 'app_trait_reclamation_gest')]

    public function trait_reclamation_gest(Reclamation $reclame, Request $request, ReclamationRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        // Récupérons l'id pour la mise à jour de l'état de l'agent (Rendez-vous en cours de traitement !)
        // Mesure transitoire
        $etat = $response->findOneBy(['id' => 10]);
        $reclame->setEtatDemandes($etat);

        $entityManager->persist($reclame);
        $entityManager->flush();
        // dd($etatDemandes);

        $etatDemandes = $response->findOneBy(['id' => 8]);
        $form = $this->createForm(TraiteGestReclamFormType::class, $reclame);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $reclame->setEtatDemandes($etatDemandes);

            $entityManager->persist($reclame);
            $entityManager->flush();

            $this->addFlash('success', 'La demande a été traitée avec succès !');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('app_home');
        }

        return $this->render('gestionnaire/traitement_info_rec_gest.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }

    #[Route('/annule-reclamation_gest/{id}', name: 'app_annule_reclamation_gest')]

    public function annule_reclamation_gest(Reclamation $reclame, Request $request, ReclamationRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        // Récupérons l'id pour la mise à jour de l'état de l'agent (état terminé)
        $etatDemandes = $response->findOneBy(['id' => 2]);

        $reclame->setEtatDemandes($etatDemandes);

        $entityManager->persist($reclame);
        $entityManager->flush();

        $this->addFlash('success', 'La réclamation a été annulée !');

        // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
        return $this->redirectToRoute('app_home');
    }
}
