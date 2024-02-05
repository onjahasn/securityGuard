<?php

namespace App\Controller\Admin;

use App\Entity\ReseauSocial;
use App\Entity\PersonnelReseauSocial;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PersonnelReseauSocialCrudController extends AbstractCrudController
{

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public static function getEntityFqcn(): string
    {
        return PersonnelReseauSocial::class;
    }

    private function getReseauSocialChoices(): array
    {
        $reseauxSociaux = $this->entityManager->getRepository(ReseauSocial::class)->findAll();
        $choices = [];

        foreach ($reseauxSociaux as $reseauSocial) {
            $choices[$reseauSocial->getName()] = $reseauSocial->getIcon();
        }

        return $choices;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('personnel', 'Personnel'),
            ChoiceField::new('icon', 'Réseau Social')
                ->setChoices($this->getReseauSocialChoices())
                ->allowMultipleChoices()
                ->setHelp('Choisir un réseau social'),
        ];
    }
     
}
