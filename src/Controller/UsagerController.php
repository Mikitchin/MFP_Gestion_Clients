<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Entity\Evaluation;
use App\Form\EvaluationFormType;
use App\Repository\DemandeRdvRepository;
use App\Repository\EvaluationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsagerController extends AbstractController
{
    #[Route('/resultat-traitement', name: 'app_result-traite')]
    public function homeu(Request $request, DemandeRdvRepository $repo): Response
    {
        $demandeRdv = new DemandeRdv();
        $user = $this->getUser();
        $demande = $repo->findBy(array('users' => $user));
        // $demande = $repo->findAll();

        return $this->render('usager/notification_demande.html.twig', [
            'demande' => $demande,

        ]);
    }

    #[Route('/evaluation', name: 'app_satisfaction')]

    public function satisfaction_usager(Request $request, EvaluationRepository $repo, EntityManagerInterface $entityManager): Response
    {
        $demande = new Evaluation();
        $form = $this->createForm(EvaluationFormType::class, $demande);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$demande->getId()) {
                // $data->setCreatedAt = new \Datetime();
            }

            $entityManager->persist($demande);
            $entityManager->flush();

            $this->addFlash('success', 'Votre impression a été enregistrée avec succès');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('app_home');
        }

        return $this->render('usager/satisfaction_form.html.twig', [
            'form' => $form->createView(),
            'demande' => $demande,
        ]);
    }

    #[Route('/infos-service', name: 'app_infos')]
    public function infos(): Response
    {

        return $this->render(
            'usager/infos-services.html.twig'

        );
    }
}
