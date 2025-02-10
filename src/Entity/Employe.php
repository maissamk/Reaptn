<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeRepository::class)]
class Employe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idoffre = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $comp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdoffre(): ?int
    {
        return $this->idoffre;
    }

    public function setIdoffre(int $idoffre): static
    {
        $this->idoffre = $idoffre;

        return $this;
    }

    public function getComp(): ?string
    {
        return $this->comp;
    }

    public function setComp(?string $comp): static
    {
        $this->comp = $comp;

        return $this;
    }
}
