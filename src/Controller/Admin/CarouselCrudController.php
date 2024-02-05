<?php

namespace App\Controller\Admin;

use App\Entity\Carousel;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CarouselCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Carousel::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            ImageField::new('image', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('description', 'Description'),
            TextField::new('button', 'Bouton'),
        ];
    }
    
}
