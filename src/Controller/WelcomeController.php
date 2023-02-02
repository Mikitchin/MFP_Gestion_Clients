<?php

namespace App\Controller;

use App\Entity\DemandeRdv;
use App\Repository\DemandeRdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EtatDemandeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_cruchome')]
    public function accueil(DemandeRdv $demande = null, Request $request, DemandeRdvRepository $repo, EtatDemandeRepository $reponse, EntityManagerInterface $entityManager): Response
    {
        // $etat_comp = $repo_etat->findOneBy(['id' => 6]);
        $demandes = $repo->findAll();
        foreach ($demandes as $demande) {
            $now = new \DateTime();
            $date = $demande->getDateRdv();
            if ($now > $date) {
                $etatDemandes = $reponse->findOneBy(['id' => 4]);

                $demande->setEtatDemandes($etatDemandes);

                $entityManager->persist($demande);
                $entityManager->flush();
            }
            // dd($etat);
        }
        return $this->render('welcome.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }
}
