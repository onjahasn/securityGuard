<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BlogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Blog::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'),
            ImageField::new('illustration', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('illustration_title', 'Image-titre'),
            TextField::new('icon_link', 'Icon'),
            TextField::new('author_icon', 'Ateur-icon'),
            TextField::new('category', 'Categorie'),
            TextField::new('icon_category', 'Categorie-icon'),
            TextField::new('admin', 'Admin'),
            TextField::new('admin_icon', 'admin_icon'),
            TextField::new('message', 'Message'),
            TextField::new('message_Icon', 'Message-icon'),
        ];
    }
}
