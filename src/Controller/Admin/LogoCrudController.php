<?php

namespace App\Controller\Admin;

use App\Entity\Logo;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LogoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Logo::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('illustration', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('slogan', 'Slogan'),
        ];
    }
    
}
