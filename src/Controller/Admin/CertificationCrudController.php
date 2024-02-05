<?php

namespace App\Controller\Admin;

use App\Entity\Certification;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CertificationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Certification::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('icon', 'Icon'),
            TextField::new('title'),
            TextField::new('description'),
        ];
    }
    
}
