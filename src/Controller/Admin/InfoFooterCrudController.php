<?php

namespace App\Controller\Admin;

use App\Entity\InfoFooter;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfoFooterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfoFooter::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('logo_footer', 'Logo')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextEditorField::new('content', 'Content'),
        ];
    }
    
}
