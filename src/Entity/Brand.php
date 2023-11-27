<?php

Namespace App\Entity;

use App\Repository\BrandRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrandRepository::class)]
class Brand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $Id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Name = null;

    public function getId(): ?int
    {
        return $this->Id;
    }

    public function setId(int $Id): static
    {
        $this->Id = $Id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }
}
