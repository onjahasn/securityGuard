<?php

namespace App\Controller\Admin;

use App\Entity\AboutDetails;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AboutDetailsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AboutDetails::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('icon'),
            TextField::new('title'),
            TextField::new('subtitle'),
        ];
    }
    
}
