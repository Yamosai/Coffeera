<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $Id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Last_name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $First_name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Email = null;

    #[ORM\Column]
    private ?int $Phone = null;

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

    public function getLastName(): ?string
    {
        return $this->Last_name;
    }

    public function setLastName(string $Last_name): static
    {
        $this->Last_name = $Last_name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->First_name;
    }

    public function setFirstName(string $First_name): static
    {
        $this->First_name = $First_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->Phone;
    }

    public function setPhone(int $Phone): static
    {
        $this->Phone = $Phone;

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
