<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdminRepository::class)]
class Admin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $Id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Last_name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Button_link = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Button_text = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Message = null;

    public function getId(): ?int
    {
        return $this->Id;
    }

    public function setId(int $Id): static
    {
        $this->Id = $Id;

        return $this;
    }

    public function getLast_name(): ?string
    {
        return $this->Last_name;
    }

    public function setLast_name(string $Last_name): static
    {
        $this->Last_name = $Last_name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): static
    {
        $this->Content = $Content;

        return $this;
    }

    public function getButtonLink(): ?string
    {
        return $this->Button_link;
    }

    public function setButtonLink(string $Button_link): static
    {
        $this->Button_link = $Button_link;

        return $this;
    }

    public function getButtonText(): ?string
    {
        return $this->Button_text;
    }

    public function setButtonText(string $Button_text): static
    {
        $this->Button_text = $Button_text;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): static
    {
        $this->Message = $Message;

        return $this;
    }
}
