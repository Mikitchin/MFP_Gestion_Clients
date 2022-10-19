<?php

namespace App\Controller\Admin;

use App\Entity\Profil;
use App\Entity\GroupeProfil;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProfilCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Profil::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            AssociationField::new('codeProfil'),
            // AssociationField::new('codeProfil')->autocomplete(),
            TextField::new('libelle'),
            TextEditorField::new('description'),
        ];
    }
}
