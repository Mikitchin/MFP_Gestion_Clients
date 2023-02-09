<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Entity\DemandeSearch;
use App\Form\DemandeFormType;
use App\Form\TraiteAcFormType;
use App\Form\DemandeSearchType;
use App\Form\TransfertFormType;
use App\Form\RendezVousAcFormType;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EtatDemandeRepository;
use phpDocumentor\Reflection\Types\Null_;
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
        // Récupérons l'id pour la mise à jour de l'état de l'agent (Rendez-vous en cours de traitement !)
        // Mesure transitoire
        $etat = $response->findOneBy(['id' => 5]);
        $demande->setEtatDemandes($etat);

        $entityManager->persist($demande);
        $entityManager->flush();
        // dd($etatDemandes);

        $etatDemandes = $response->findOneBy(['id' => 6]);
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

    #[Route('/annule-demande/{id}', name: 'app_annule_demande')]

    public function annule_demande_Ac(DemandeRdv $demande, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {
        // Récupérons l'id pour la mise à jour de l'état de l'agent (état terminé)
        $etatDemandes = $response->findOneBy(['id' => 1]);

        $demande->setEtatDemandes($etatDemandes);

        $entityManager->persist($demande);
        $entityManager->flush();

        $this->addFlash('success', 'La demande a été transférée avec succès !');

        // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
        return $this->redirectToRoute('app_home');
    }

    #[Route('/demande/agent-accueil', name: 'app_demande_rdv_agt')]
    #[Route('/demande/agent-accueil-edit/{id}', name: 'edit_demande_rdv_agt')]

    public function agent_accueil_rdv(DemandeRdv $demande = null, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $reponse, EntityManagerInterface $entityManager): Response
    {

        if (!$demande) {
            $demande = new DemandeRdv();

            // On met à jour l'état de la demande (Rendez-vous pris)
            $etat = $reponse->findOneBy(['id' => 1]);

            $id_rdv = $repo->findOneBy([], ['id' => 'desc']);
            $lastId = $id_rdv->getId();
            if (!$lastId) {
                $lastId = 1;
            }

            // Script de la nomenclature du code de rendez-vous !
            $j = new \Datetime();
            $result = $j->format('dmY');
            $b = "RDV_" . $result . "_" . $lastId;

            $user_cnt = $this->getUser();
        }

        //Contrôle avant modification 

        $form = $this->createForm(DemandeFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$demande->getId()) {
                // $demande->setCreatedAt = new \Datetime();
                $demande->setCodeDde($b);
                $demande->setUsers($user_cnt);
                $demande->setEtatDemandes($etat);
            }



            $entityManager->persist($demande);
            $entityManager->flush();

            $this->addFlash('success', 'Votre demande a été enregistrée avec succès');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('app_home');
        }

        return $this->render('agent/rdv_form.html.twig', [
            'demande_form' => $form->createView(),
            'editMode' => $demande->getId() !== null,
        ]);
    }

    #[Route('/agent-accueil/liste-demande', name: 'app_liste_rdv_agt')]
    public function demande(Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        $demande = new DemandeRdv();
        $user = $this->getUser();
        $demande = $repo->findBy(array('users' => $user));
        // $demande = $repo->findAll();

        // dd($demandes);

        return $this->render('agent/rdv_liste.html.twig', [
            'demande' => $demande,

        ]);
    }

    #[Route('/transfert-demande/{id}', name: 'app_transfert')]

    public function transfert_demande(DemandeRdv $demande, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {
        // Récupérons l'id pour la mise à jour de l'état de l'agent (Rendez-vous en cours de traitement !)
        // Mesure transitoire
        $etat = $response->findOneBy(['id' => 5]);
        $demande->setEtatDemandes($etat);

        $entityManager->persist($demande);
        $entityManager->flush();
        // dd($etatDemandes);

        $etatDemandes = $response->findOneBy(['id' => 6]);
        $form = $this->createForm(TransfertFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $demande->setEtatDemandes($etatDemandes);

            $entityManager->persist($demande);
            $entityManager->flush();

            $this->addFlash('success', 'La demande a été traitée avec succès !');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('app_home');
        }

        return $this->render('agent/info_transfert.html.twig', [
            'form' => $form->createView(),
            'demande' => $demande,

        ]);
    }

    #[Route('/destinataire-controle', name: 'app_destinataire')]

    public function destinataire_verif(DemandeRdv $demande = Null, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {
        $demande = new DemandeRdv();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        // $demande = [];
        $demande = $repo->findOneByFieldAccueil_2();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $demande = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('agent/controle.html.twig', [
            'form' => $form->createView(),
            'demande' => $demande,
            // 'demande' => $paginator,
            // 'previous' => $offset - DemandeRdvRepository::PAGINATOR_PER_PAGE,
            // 'next' => min(count($paginator), $offset + DemandeRdvRepository::PAGINATOR_PER_PAGE),
        ]);
    }

    #[Route('/validation-rdv/{id}', name: 'app_valid_rdv')]

    public function rdv_valid(DemandeRdv $demande, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $response, EntityManagerInterface $entityManager): Response
    {
        // Récupérons l'id pour la mise à jour de l'état de l'agent (Rendez-vous en cours de traitement !)
        // Mesure transitoire
        $etat = $response->findOneBy(['id' => 5]);
        $demande->setEtatDemandes($etat);

        $entityManager->persist($demande);
        $entityManager->flush();
        // dd($etatDemandes);

        $etatDemandes = $response->findOneBy(['id' => 9]);
        $form = $this->createForm(RendezVousAcFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $demande->setEtatDemandes($etatDemandes);

            $entityManager->persist($demande);
            $entityManager->flush();

            $this->addFlash('success', 'La demande a été traitée avec succès !');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('app_home');
        }

        return $this->render('agent/info_rendez_vous.html.twig', [
            'form' => $form->createView(),
            'demande' => $demande,

        ]);
    }
}
