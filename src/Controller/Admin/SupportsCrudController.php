<?php

namespace App\Controller\Admin;

use App\Entity\Supports;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SupportsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Supports::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('icon', 'Icon')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('title', 'Titre'),
            TextEditorField::new('description'),
        ];
    }
    
}
