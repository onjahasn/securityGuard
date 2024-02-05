<?php

namespace App\Controller\Admin;

use App\Entity\WhyDetails;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WhyDetailsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WhyDetails::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextField::new('subtitle'),
            ImageField::new('illustration', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('description'),
        ];
    }
    
}
