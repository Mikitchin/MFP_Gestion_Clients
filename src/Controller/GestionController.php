<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Entity\DemandeSearch;
use App\Form\DemandeSearchType;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EtatDemandeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class GestionController extends AbstractController
{
    #[Route('/home-page', name: 'app_home')]
    public function index(Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo, EtatDemandeRepository $repo_etat): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('agent/index.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_GEST_1')) {
            // Récupérer l'utilisateur courant
            $user = $this->getUser();

            $demandeSearch = new DemandeSearch();
            $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
            $form->handleRequest($request);
            $demande = [];
            // $demande = $repo->findAll();
            // $code = $this->getCodeDde();
            $demande = $repo->findFieldGest();
            if ($form->isSubmitted() && $form->isValid()) {
                $code = $demandeSearch->getCodeDde();
                if ($code != "")
                    $demande = $repo->findBy(['codeDde' => $code]);
            }

            return $this->render('gestionnaire/index.html.twig', [
                'form' => $form->createView(),
                'demande' => $demande,
                'user' => $user,
            ]);
            return $this->render('gestionnaire/index.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_GEST_2')) {

            // Récupérer l'utilisateur courant
            $user = $this->getUser();
            $demandeSearch = new DemandeSearch();
            $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
            $form->handleRequest($request);
            $demande = [];
            // $demande = $repo->findAll();
            // $code = $this->getCodeDde();
            $demande = $repo->findOneByFieldGest_2();
            if ($form->isSubmitted() && $form->isValid()) {
                $code = $demandeSearch->getCodeDde();
                if ($code != "")
                    $demande = $repo->findBy(['codeDde' => $code]);
            }

            return $this->render('gestionnaire/index.html.twig', [
                'form' => $form->createView(),
                'demande' => $demande,
                'user' => $user
            ]);
            return $this->render('gestionnaire/index.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }


        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_SUPERVISEUR')) {
            $demandeSearch = new DemandeSearch();
            $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
            $form->handleRequest($request);
            $demande = [];
            $demande = $repo->findOneByFieldAccueil();
            $demande_gest = $repo->findOneByFieldAccueil_2();
            // Récupérer l'utilisateur courant
            $user = $this->getUser();

            if ($form->isSubmitted() && $form->isValid()) {
                $code = $demandeSearch->getCodeDde();
                if ($code != "")
                    $demande = $repo->findBy(['codeDde' => $code]);
            }

            return $this->render('superviseur/index.html.twig', [
                'form' => $form->createView(),
                'demande' => $demande,
                'demande_gest' => $demande_gest,
                'user' => $user,
                // 'demande' => $paginator,
                // 'previous' => $offset - DemandeRdvRepository::PAGINATOR_PER_PAGE,
                // 'next' => min(count($paginator), $offset + DemandeRdvRepository::PAGINATOR_PER_PAGE),
            ]);
        }

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_AGENT_ACCUEIL')) {
            // $demande = new DemandeRdv();
            // $offset = max(0, $request->query->getInt('offset', 0));
            // $paginator = $repo->getDemandeRdvPaginator($demande, $offset);
            // Récupérer l'utilisateur courant
            $user = $this->getUser();
            $demandeSearch = new DemandeSearch();
            $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
            $form->handleRequest($request);
            $demande = [];
            $demande = $repo->findOneByFieldAccueil();

            if ($form->isSubmitted() && $form->isValid()) {
                $code = $demandeSearch->getCodeDde();
                if ($code != "")
                    $demande = $repo->findBy(['codeDde' => $code]);
            }

            return $this->render('agent/index.html.twig', [
                'form' => $form->createView(),
                'demande' => $demande,
                'user' => $user,
                // 'demande' => $paginator,
                // 'previous' => $offset - DemandeRdvRepository::PAGINATOR_PER_PAGE,
                // 'next' => min(count($paginator), $offset + DemandeRdvRepository::PAGINATOR_PER_PAGE),
            ]);
        }
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_CHEF_SERVICE')) {
            return $this->render('chef_service/index.html.twig', [
                'controller_name' => 'GestionController',
            ]);
        }

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {

            $demande = new DemandeRdv();
            // $demande_etat = new DemandeRdv();
            $user = $this->getUser();
            $etat = 0;
            // $etat_comp = $repo_etat->findOneBy(['id' => 6]);
            $demandes = $repo->findBy(array('users' => $user));
            foreach ($demandes as $demande) {
                $etat = $demande->getEtatDemandes()->getId();
                //faire quelque chose avec $etat
                // if ($etat = $etat_comp) {
                //     $etat_termine = $etat;
                // }
                // dd($etat);
            }

            return $this->render('usager/home.html.twig',  [
                'demande' => $demandes,
                'etat_termine' => $etat,
                'user' => $user,
            ]);
        }
    }

    #[Route('/creer_profil', name: 'app_ajoutprofil')]
    public function aprofil(): Response
    {
        return $this->render('gestion/ajouter_profil.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    #[Route('/afficher_profil', name: 'app_profil')]
    public function profil(): Response
    {
        return $this->render('gestion/afficher_profil.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }

    #[Route('/gestion', name: 'app_gestion')]
    public function gestion(): Response
    {
        return $this->render('registration/login.html.twig', [
            'controller_name' => 'GestionController',
        ]);
    }
}
