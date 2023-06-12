<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditPasswordType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\AppAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'app_inscription')]
    public function inscription(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        UserAuthenticatorInterface $userAuthenticator,
        AppAuthenticator $authenticator,
        EntityManagerInterface $entityManager
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request,

            );
        }

        //  return $this->render('registration/register.html.twig', [
        //      'registrationForm' => $form->createView(),
        // ]);
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/modification-mot-de-passe/{id}', name: 'app_modif_password')]
    public function modifPassword(User $users, UserRepository $repo, Request $request, UserPasswordHasherInterface $hasher, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur courant
        $user = $this->getUser();
        $form = $this->createForm(EditPasswordType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($hasher->isPasswordValid($users, $form->getData()['password'])) {
                $users->setPassword($hasher->hashPassword(
                    $users,
                    $form->getData()['newPassword']
                ));

                $entityManager->persist($user);
                $entityManager->flush();
                // On envoie une alerte disant que l'adresse e-mail est inconnue
                $this->addFlash(
                    'succes',
                    'Le mot de passe a été modifié'
                );
                // On retourne la page d'erreur d'inscription
                return $this->redirectToRoute('app_agent');
            } else {
                $this->addFlash(
                    'warning',
                    'Le mot de passe renseigné est incorrect.'
                );
            }
        }
        return $this->render('security/modif_password.html.twig', [
            'form' => $form->createView(),
            'user' => $user,

        ]);
    }
}
