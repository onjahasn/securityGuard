<?php

namespace App\Entity;

use App\Repository\InfoFooterRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoFooterRepository::class)]
class InfoFooter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $logoFooter = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogoFooter(): ?string
    {
        return $this->logoFooter;
    }

    public function setLogoFooter(string $logoFooter): static
    {
        $this->logoFooter = $logoFooter;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }
}
