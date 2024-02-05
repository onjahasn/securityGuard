<?php

namespace App\Entity;

use App\Repository\PersonnelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonnelRepository::class)]
class Personnel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true )]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subtitle = null;

    #[ORM\Column(length: 255)]
    public ?string $officer_name = null;

    #[ORM\Column(length: 255)]
    private ?string $designation = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'personnel', targetEntity: PersonnelReseauSocial::class)]
    private Collection $personnelReseauSocials;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function __construct()
    {
        $this->personnelReseauSocials = new ArrayCollection();
    }

    // Surcharge
    public function __toString()
    {
        return $this->image;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): static
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getOfficerName(): ?string
    {
        return $this->officer_name;
    }

    public function setOfficerName(string $officer_name): static
    {
        $this->officer_name = $officer_name;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, PersonnelReseauSocial>
     */
    public function getPersonnelReseauSocials(): Collection
    {
        return $this->personnelReseauSocials;
    }

    public function addPersonnelReseauSocial(PersonnelReseauSocial $personnelReseauSocial): static
    {
        if (!$this->personnelReseauSocials->contains($personnelReseauSocial)) {
            $this->personnelReseauSocials->add($personnelReseauSocial);
            $personnelReseauSocial->setPersonnel($this);
        }

        return $this;
    }

    public function removePersonnelReseauSocial(PersonnelReseauSocial $personnelReseauSocial): static
    {
        if ($this->personnelReseauSocials->removeElement($personnelReseauSocial)) {
            // set the owning side to null (unless already changed)
            if ($personnelReseauSocial->getPersonnel() === $this) {
                $personnelReseauSocial->setPersonnel(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
