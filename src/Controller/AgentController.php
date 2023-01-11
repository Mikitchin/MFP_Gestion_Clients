<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Entity\DemandeSearch;
use App\Form\TraiteAcFormType;
use App\Form\DemandeSearchType;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EtatDemandeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AgentController extends AbstractController
{
    // #[Route('/espace_agent', name: 'app_ahome')]
    // public function index(Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    // {

    //     $demandeSearch = new DemandeSearch();
    //     $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
    //     $form->handleRequest($request);
    //     $demande = [];

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $code = $demandeSearch->getCodeDde();
    //         if ($code != "")
    //             $demande = $repo->findBy(['codeDde' => $code]);
    //     }

    //     // $demandes = new DemandeRdv();
    //     // $demandes = $repo->findAll();

    //     return $this->render('agent/index.html.twig', [
    //         'formulaire' => $form->createView(), 'demande' => $demande,
    //     ]);
    // }

    #[Route('/creer-rdv', name: 'app_createrdv')]

    public function ardv(): Response
    {
        return $this->render('agent/rdv_form.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/afficher-rdv', name: 'app_listrdv')]

    public function lrdv(): Response
    {
        return $this->render('agent/rdvlist.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/stats-rdv', name: 'app_statsrdv')]

    public function srdv(): Response
    {
        return $this->render('agent/stats.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/prise_de_rdv_agent_d_accueil', name: 'app_rdv_agt')]

    public function rdv_agt(): Response
    {
        return $this->render('agent/rdv_form.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/list_rdv_agent', name: 'app_lst_dem_agt')]

    public function lst_dem_agt(): Response
    {
        return $this->render('agent/rdvlist.html.twig', [
            'controller_name' => 'AgentController',
        ]);
    }

    #[Route('/traitement-demande-rdv/{id}', name: 'app_ges_infotreat')]

    public function ges_infotreat(DemandeRdv $demande, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {
        // Récupérons l'id pour la mise à jour de l'état de l'agent (Rendez-vous honoré)
        $etatDemandes = $response->findOneBy(['id' => 6]);
        // dd($etatDemandes);
        $form = $this->createForm(TraiteAcFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $demande->setEtatDemandes($etatDemandes);

            $entityManager->persist($demande);
            $entityManager->flush();

            $this->addFlash('success', 'La demande a été traitée avec succès !');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('app_home');
        }

        return $this->render('agent/info_traitement.html.twig', [
            'form' => $form->createView(),
            'demande' => $demande,

        ]);
    }

    #[Route('/transferer-demande-rdv/{id}', name: 'app_ac_transfert')]

    public function ac_transferer(DemandeRdv $demande, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
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
