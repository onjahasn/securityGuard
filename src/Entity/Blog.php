<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlogRepository::class)]
class Blog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subtitle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $illustration = null;

    #[ORM\Column(length: 255)]
    private ?string $illustration_title = null;

    #[ORM\Column(length: 255)]
    private ?string $icon_link = null;

    #[ORM\Column(length: 255)]
    private ?string $author_icon = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column(length: 255)]
    private ?string $icon_category = null;

    #[ORM\Column(length: 255)]
    private ?string $admin = null;

    #[ORM\Column(length: 255)]
    private ?string $adminIcon = null;

    #[ORM\Column(length: 255)]
    private ?string $message = null;

    #[ORM\Column(length: 255)]
    private ?string $messageIcon = null;

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

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): static
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getIllustrationTitle(): ?string
    {
        return $this->illustration_title;
    }

    public function setIllustrationTitle(string $illustration_title): static
    {
        $this->illustration_title = $illustration_title;

        return $this;
    }

    public function getIconLink(): ?string
    {
        return $this->icon_link;
    }

    public function setIconLink(string $icon_link): static
    {
        $this->icon_link = $icon_link;

        return $this;
    }

    public function getAuthorIcon(): ?string
    {
        return $this->author_icon;
    }

    public function setAuthorIcon(string $author_icon): static
    {
        $this->author_icon = $author_icon;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getIconCategory(): ?string
    {
        return $this->icon_category;
    }

    public function setIconCategory(string $icon_category): static
    {
        $this->icon_category = $icon_category;

        return $this;
    }

    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    public function setAdmin(string $admin): static
    {
        $this->admin = $admin;

        return $this;
    }

    public function getAdminIcon(): ?string
    {
        return $this->adminIcon;
    }

    public function setAdminIcon(string $adminIcon): static
    {
        $this->adminIcon = $adminIcon;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getMessageIcon(): ?string
    {
        return $this->messageIcon;
    }

    public function setMessageIcon(string $messageIcon): static
    {
        $this->messageIcon = $messageIcon;

        return $this;
    }
}
