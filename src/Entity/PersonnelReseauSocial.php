<?php

namespace App\Entity;

use App\Repository\PersonnelReseauSocialRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonnelReseauSocialRepository::class)]
class PersonnelReseauSocial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'personnelReseauSocials')]
    private ?Personnel $personnel = null;

    #[ORM\ManyToOne(inversedBy: 'personnelReseauSocials')]
    private ?ReseauSocial $reseauSocial = null;

    public function __toString()
    {
        return $this->id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonnel(): ?Personnel
    {
        return $this->personnel;
    }

    public function setPersonnel(?Personnel $personnel): static
    {
        $this->personnel = $personnel;

        return $this;
    }

    public function getReseauSocial(): ?ReseauSocial
    {
        return $this->reseauSocial;
    }

    public function setReseauSocial(?ReseauSocial $reseauSocial): static
    {
        $this->reseauSocial = $reseauSocial;

        return $this;
    }
}
