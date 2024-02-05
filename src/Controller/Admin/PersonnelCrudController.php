<?php

namespace App\Controller\Admin;

use App\Entity\Personnel;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;

class PersonnelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Personnel::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'),
            TextField::new('officer_name', 'Les officiers'),
            TextField::new('designation', 'Designation'),
            TextField::new('description'),
            ImageField::new('image', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            AssociationField::new('personnelReseauSocials', 'Reseaux Sociaux Personnels')
        ];
    }
    
}
