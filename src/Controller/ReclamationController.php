<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\DemandeSearch;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EtatDemandeRepository;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReclamationController extends AbstractController
{
    #[Route('/reclamation', name: 'app_reclamation')]
    #[Route('/reclamation/edit/{id}', name: 'edit_reclamation')]

    public function index(
        Reclamation $reclame = null,
        Request $request,
        ReclamationRepository $repo,
        EtatDemandeRepository $reponse,
        EntityManagerInterface $entityManager,
        #[Autowire('%photo_dir%')] string $photoDir
    ): Response {

        if (!$reclame) {
            $reclame = new Reclamation();

            // On met à jour l'état de la demande (Rendez-vous pris)
            $etat = $reponse->findOneBy(['id' => 1]);

            $id_rdv = $repo->findOneBy([], ['id' => 'desc']);

            $lastId = 0;
            if (!$lastId) {
                $lastId = 1;
            } else
                $lastId = $id_rdv->getId();


            // Script de la nomenclature du code de rendez-vous !
            $j = new \Datetime();
            $result = $j->format('dmY');
            $b = "NUM_REC_" . $result . "_" . $lastId;

            $user_cnt = $this->getUser();
        }

        //Contrôle avant modification 

        $form = $this->createForm(ReclamationType::class, $reclame);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$reclame->getId()) {
                // $demande->setCreatedAt = new \Datetime();
                $reclame->setCodeDde($b);
                $reclame->setUsers($user_cnt);
                $reclame->setEtatDemandes($etat);
            }
            if ($fichier = $form['fichier']->getData()) {
                $filename = bin2hex(random_bytes(6)) . '.' . $fichier->guessExtension();
                try {
                    $fichier->move($photoDir, $filename);
                } catch (FileException $e) {
                    // unable to upload the photo, give up
                }
                $reclame->setFilename($filename);
            }


            $entityManager->persist($reclame);
            $entityManager->flush();

            $this->addFlash('success', 'Votre demande a été enregistrée avec succès');

            // return $this->redirectToRoute('demande_add', ['id' => $demande->getId()]);
            return $this->redirectToRoute('app_home');
        }

        return $this->render('usager/reclame_form.html.twig', [
            'reclame_form' => $form->createView(),
            'editMode' => $reclame->getId() !== null,
        ]);
    }

    #[Route('/liste-reclamation', name: 'app_liste_reclame')]
    public function reclamation(Request $request, EntityManagerInterface $entityManager, ReclamationRepository $repo): Response
    {
        $reclame = new Reclamation();
        $user = $this->getUser();
        $reclame = $repo->findBy(array('users' => $user));
        // $demande = $repo->findAll();

        // dd($demandes);

        return $this->render('usager/reclamation_liste.html.twig', [
            'reclame' => $reclame,

        ]);
    }

    #[Route('/delete-reclamation/{id}', name: 'delete_reclamation')]
    public function delete_reclame(Reclamation $reclame, Request $request, EntityManagerInterface $entityManager, ReclamationRepository $repo): Response
    {
        $entityManager->remove($reclame);
        $entityManager->flush();
        return $this->render('usager/reclame_del.html.twig');
    }

    #[Route('/rechercher-reclamation', name: 'app_search_reclame')]
    public function search_reclame(Request $request, EntityManagerInterface $entityManager, ReclamationRepository $repo): Response
    {
        $reclameSearch = new DemandeSearch();
        $form = $this->createForm(DemandeSearchType::class, $reclameSearch);
        $form->handleRequest($request);
        $demande = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $reclameSearch->getCodeDde();
            if ($code != "")
                $reclame = $repo->findBy(['codeDde' => $code]);
        }

        return $this->render('usager/search_reclame.html.twig', [
            'form' => $form->createView(),
            'reclame' => $reclame
        ]);
    }
}
