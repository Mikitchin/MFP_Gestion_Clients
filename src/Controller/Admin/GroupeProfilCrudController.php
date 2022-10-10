<?php

namespace App\Controller\Admin;

use App\Entity\GroupeProfil;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GroupeProfilCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return GroupeProfil::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
