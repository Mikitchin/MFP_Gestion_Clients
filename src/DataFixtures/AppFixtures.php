<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Structure;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {

        // Utilisation des fakers
        $faker = Factory::create('fr-FR');

        // Création de 10 structures
        for ($i = 0; $i < 10; $i++) {

            // Création des structures
            $structure = new Structure();

            $structure->setCodeStructure($faker->randomNumber(4, true));
            $structure->setLibelle($faker->company());

            $manager->persist($structure);


            // Création de 10 utilisateurs
            for ($i = 0; $i < 1; $i++) {
                // Création d'un utilisateur
                $user = new User();

                $user->setEmail($faker->email())
                    ->setContact($faker->randomNumber(5, false))
                    ->setDateNaissance($faker->dateTime())
                    ->setFonction($faker->text())
                    ->setLieuNaissance($faker->city())
                    ->setNom($faker->lastName())
                    ->setPrenom($faker->firstName())
                    ->setMatricule($faker->randomNumber(6, true))
                    ->setVille($faker->city())
                    ->setStructure($structure);

                // $password = $this->encoder->encodePassword($user, 'password');
                $user->setPassword($faker->password);

                $manager->persist($user);
            }
        }
        $manager->flush();
    }
}
