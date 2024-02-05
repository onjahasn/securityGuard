<?php

namespace App\Controller\Admin;

use App\Entity\WhyChooseUs;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WhyChooseUsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WhyChooseUs::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('icon', 'Icon'),
            TextField::new('category', 'Categorie'),
            TextField::new('description', 'Description'),
        ];
    }
    
}
