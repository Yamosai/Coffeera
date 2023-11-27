<?php

Namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $Id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Name = null;

    #[ORM\Column]
    private ?float $Price = null;

    #[ORM\Column]
    private ?float $Note = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Family = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $country = null;

    #[ORM\Column]
    private ?int $Fk_Id_category = null;

    #[ORM\Column]
    private ?int $Fk_Id_brand = null;

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

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->Note;
    }

    public function setNote(float $Note): static
    {
        $this->Note = $Note;

        return $this;
    }

    public function getFamily(): ?string
    {
        return $this->Family;
    }

    public function setFamily(string $Family): static
    {
        $this->Family = $Family;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getFkIdCategory(): ?int
    {
        return $this->Fk_Id_category;
    }

    public function setFkIdCategory(int $Fk_Id_category): static
    {
        $this->Fk_Id_category = $Fk_Id_category;

        return $this;
    }

    public function getFkIdBrand(): ?int
    {
        return $this->Fk_Id_brand;
    }

    public function setFkIdBrand(int $Fk_Id_brand): static
    {
        $this->Fk_Id_brand = $Fk_Id_brand;

        return $this;
    }
}
