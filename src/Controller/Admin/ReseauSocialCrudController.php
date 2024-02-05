<?php

namespace App\Controller\Admin;

use App\Entity\ReseauSocial;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReseauSocialCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReseauSocial::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('reseauSocial', 'Réseaux Sociaux')
                ->autocomplete()
        ];
    }
    
}
