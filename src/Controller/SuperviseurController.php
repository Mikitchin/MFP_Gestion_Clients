<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\DemandeRdv;
use App\Entity\Reclamation;
use App\Entity\DemandeSearch;
use App\Form\DemandeSearchType;
use App\Repository\UserRepository;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReclamationRepository;
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

    #[Route('/superviseur-reclamation', name: 'app_sup_reclamation')]
    public function gest_dir_3_reclame(Reclamation $reclame = Null, Request $request, EntityManagerInterface $entityManager, ReclamationRepository $repo): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $reclame = new Reclamation();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $reclame = [];
        $reclame = $repo->findSupByField();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('superviseur/index_sup_reclamation.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }

    #[Route('/superviseur-trait-requete', name: 'app_sup_requete')]
    public function sup_trait_requete(DemandeRdv $reclame = Null, Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $reclame = new DemandeRdv();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $reclame = [];
        $reclame = $repo->findSupRequeteByField();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('superviseur/sup_requete.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }

    #[Route('/superviseur-requete-traite-cruc', name: 'app_sup_requete_traite_cruc')]
    public function sup_trait_requete_cruc(DemandeRdv $reclame = Null, Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $reclame = new DemandeRdv();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $reclame = [];
        $reclame = $repo->findSupRequeteByField();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('superviseur/sup_requete_traite_cruc.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }

    #[Route('/superviseur-requete-traite-dpa', name: 'app_sup_requete_traite_dpa')]
    public function sup_trait_requete_dpa(DemandeRdv $reclame = Null, Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $reclame = new DemandeRdv();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $reclame = [];
        $reclame = $repo->findOneByFieldAccueil_2();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('superviseur/sup_requete_traite_cruc.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }

    #[Route('/superviseur-valide-rdv', name: 'app_sup_valide_rdv')]
    public function sup_valide_rdv(DemandeRdv $reclame = Null, Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();

        $reclame = new DemandeRdv();
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $reclame = [];
        $reclame = $repo->findSupValidRdvByField();

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('superviseur/sup_valide_rdv.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame,
            'user' => $user,

        ]);
    }
}
