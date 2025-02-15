<?php

namespace App\Entity;

use App\Repository\MaterielventeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaterielventeRepository::class)]
class Materielvente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[Assert\NotBlank(message: "veuillez entrez le nom du matériel.")]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[Assert\NotBlank(message: "Le prix est obligatoire.")]
    #[ORM\Column]
    private ?float $prix = null;

    #[Assert\NotBlank(message: "veuillez entrez une description du matériel")]
    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $disponibilite = null;

   
    #[ORM\Column(length: 255)]
    private ?string $image = null;


    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'materiels')]
#[ORM\JoinColumn(nullable: true)]
private $commande;

public function getCommande(): ?Commande
{
    return $this->commande;
}

public function setCommande(?Commande $commande): self
{
    $this->commande = $commande;

    return $this;
}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

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

    public function isDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

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
