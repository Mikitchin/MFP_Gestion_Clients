<?php

namespace App\Controller;

use Datetime;
use App\Entity\User;
use App\Entity\DemandeRdv;
use App\Entity\DemandeSearch;
use App\Form\DemandeFormType;
use App\Form\DemandeSearchType;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DemandeRdvController extends AbstractController
{

    #[Route('/demande', name: 'app_demande_rdv')]
    #[Route('/demande/edit/{id}', name: 'edit_demande_rdv')]

    public function index(DemandeRdv $demande = null, Request $request, DemandeRdvRepository $repo, EntityManagerInterface $entityManager): Response
    {

        if (!$demande) {
            $demande = new DemandeRdv();
        }

        $id_rdv = $repo->findOneBy([], ['id' => 'desc']);
        $lastId = $id_rdv->getId();
        if (!$lastId) {
            $lastId = 1;
        }

        $j = new \Datetime();
        $result = $j->format('dmY');
        $b = "RDV_" . $result . "_" . $id_rdv;

        $user_cnt = $this->getUser();
        // $demande_rs = $repo->findBy(array('users' => $user));
        // dd($user);

        $form = $this->createForm(DemandeFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$demande->getId()) {
                $demande->setCreatedAt = new \Datetime();
            }

            $demande->setCodeDde($b);
            $demande->setUsers($user_cnt);
            $entityManager->persist($demande);
            $entityManager->flush();
            //   $this->addFlash('success', 'Votre demande a été faite');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('demande_add');
        }

        return $this->render('usager/rdv_form.html.twig', [
            'demande_form' => $form->createView(),
            'editMode' => $demande->getId() !== null,
        ]);
    }

    #[Route('/liste-demande', name: 'app_liste_rdv')]
    public function demande(Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        $demande = new DemandeRdv();
        $user = $this->getUser()->getId();
        $demande = $repo->findBy(array('users' => $user));
        // $demande = $repo->findAll();

        // dd($demande);

        return $this->render('usager/rdv_liste.html.twig', [
            'demande' => $demande,

        ]);
    }

    #[Route('/delete/{id}', name: 'delete_demande')]
    public function delete_demande(DemandeRdv $demande, Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        $entityManager->remove($demande);
        $entityManager->flush();
        return $this->render('usager/demande_del.html.twig');
    }

    #[Route('/succes_add', name: 'demande_add')]
    public function demande_add(): Response
    {
        return $this->render('usager/demande_add.html.twig');
    }

    #[Route('/recherche-demande', name: 'app_search')]
    public function search_demande(Request $request, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        $demandeSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $demandeSearch);
        $form->handleRequest($request);
        $demande = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $demandeSearch->getCodeDde();
            if ($code != "")
                $demande = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('usager/demande_search.html.twig', [
            'form' => $form->createView(), 'demande' => $demande
        ]);
    }
}
