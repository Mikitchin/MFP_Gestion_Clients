<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex()->setColumns(6),
            TextField::new('matricule'),
            TextField::new('nom'),
            TextField::new('prenom'),
            EmailField::new('email', 'E-Mail')->setColumns(6),
            AssociationField::new('structure'),
            // AssociationField::new('roles'),

            // TextField::new('password', 'Mot de Passe')->setFormType(PasswordType::class)->onlyWhenCreating()->setColumns(6),
            // TextEditorField::new('password', 'Passe')->onlyOnIndex()->setColumns(6),
            ChoiceField::new('roles', 'Roles')->setChoices([
                'Admin' => 'ROLE_ADMIN', 'Gestionnaire' => 'ROLE_GEST',
                'Agent_Accueil' => 'ROLE_AGENT_ACCUEIL', 'Superviseur' => "ROLE_SUPERVISEUR", "Chef de service" => "ROLE_CHEF",
                'Usager_Client' => 'ROLE_USAGER_CLIENT'
            ])->allowMultipleChoices()->setColumns(6),

        ];
    }
}
