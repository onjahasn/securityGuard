<?php

namespace App\Controller\Admin;

use App\Entity\InfoContact;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfoContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfoContact::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextEditorField::new('description', 'Description'),
        ];
    }
    
}
