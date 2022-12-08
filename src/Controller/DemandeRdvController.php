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
use Symfony\Component\Validator\Constraints\All;

class DemandeRdvController extends AbstractController
{

    #[Route('/demande', name: 'app_demande_rdv')]
    #[Route('/demande/{id}/edit', name: 'edit_demande_rdv')]

    public function index(DemandeRdv $demande = null, Request $request, DemandeRdvRepository $repo, EntityManagerInterface $entityManager): Response
    {

        if (!$demande) {
            $demande = new DemandeRdv();
        }
        $id_rdv = $repo->findOneBy([], ['id' => 'desc']);
        $lastId = $id_rdv->getId();
        $j = new \Datetime();
        $result = $j->format('d-m-Y');
        $b = "RDV_" . $result . "_" . $lastId;

        // dd($b);

        $form = $this->createForm(DemandeFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$demande->getId()) {
                $demande->setCreatedAt = new \Datetime();
            }

            $demande->setCodeDde($b);
            $entityManager->persist($demande);
            $entityManager->flush();
            $this->addFlash('success', 'Votre demande a été faite');

            return $this->redirectToRoute('app_liste_rdv', ['id' => $demande->getId()]);
        }

        return $this->render('usager/rdv_form.html.twig', [
            'demande_form' => $form->createView(),
            'editMode' => $demande->getId() !== null,
        ]);
    }

    #[Route('/demande/{id}', name: 'app_liste_rdv')]
    public function demande(Request $request, DemandeRdv $demandeRdv, EntityManagerInterface $entityManager, DemandeRdvRepository $repo): Response
    {
        // $demandeRdv = $repo->findAll();
        return $this->render('usager/rdv_liste.html.twig', [
            'demande' => $demandeRdv
        ]);
    }
}
