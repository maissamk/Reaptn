<?php

namespace App\Entity;

use App\Repository\MateriellocationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MateriellocationRepository::class)]
class Materiellocation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[Assert\NotBlank(message: "veuillez entrez le nom du matériel.")]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: "Le nom du matériel doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom du matériel ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(pattern: "/^[a-zA-ZÀ-ÿ\- ]+$/", message: "Le nom doit contenir uniquement des lettres.")]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[Assert\NotBlank(message: "Le prix est obligatoire.")]
    #[ORM\Column]
    private ?float $prix = null;

    #[Assert\NotBlank(message: "veuillez entrez une description du matériel")]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: "La description du matériel doit contenir au moins {{ limit }} caractères.",
        maxMessage: "La description du matériel ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(pattern: "/^[a-zA-ZÀ-ÿ\- ]+$/", message: "La description doit contenir uniquement des lettres.")]
    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $disponibilite = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'materiellocations')]
    private ?user $user_id_materiellocation = null;

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

    public function getUserIdMateriellocation(): ?user
    {
        return $this->user_id_materiellocation;
    }

    public function setUserIdMateriellocation(?user $user_id_materiellocation): static
    {
        $this->user_id_materiellocation = $user_id_materiellocation;

        return $this;
    }
}
