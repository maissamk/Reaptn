<?php

namespace App\Entity;

use App\Repository\MaterielventeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: MaterielventeRepository::class)]
#[Vich\Uploadable]  // Ajout de l'annotation pour le bundle VichUploader

class Materielvente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[Assert\NotBlank(message: "Veuillez entrer le nom du matériel.")]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: "Le nom du matériel doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom du matériel ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(pattern: "/^[a-zA-ZÀ-ÿ\- ]+$/", message: "Le nom doit contenir uniquement des lettres.")]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[Gedmo\Slug(fields: ["nom"])]
    #[ORM\Column(length: 255, unique: true)]
    private ?string $slug = null;

    #[Assert\NotBlank(message: "Le prix est obligatoire.")]
    #[ORM\Column]
    private ?float $prix = null;

    #[Assert\NotBlank(message: "Veuillez entrer une description du matériel.")]
    #[Assert\Length(
        min: 3,
        max: 255,
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

    



    
    #[Gedmo\Timestampable(on: "create")]
    #[ORM\Column(type: "datetime")]
    private \DateTime $createdAt;
    #[Gedmo\Timestampable(on: "update")]
    #[ORM\Column(type: "datetime")]
     private \DateTime $updatedAt;




    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'materiels')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Commande $commande = null;

    #[ORM\ManyToOne(inversedBy: 'materielventes')]
    private ?User $user_id_materielvente = null;

    #[ORM\ManyToOne(inversedBy: 'materielventes')]
    private ?Categorie $categorie = null;

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

    public function getSlug(): ?string
    {
        return $this->slug;
    }
    public function setSlug(string $slug): static
    {
        $this->slug = $slug;
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


    







    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;
        return $this;
    }

    public function getUserIdMaterielvente(): ?User
    {
        return $this->user_id_materielvente;
    }

    public function setUserIdMaterielvente(?User $user_id_materielvente): static
    {
        $this->user_id_materielvente = $user_id_materielvente;
        return $this;
    }

    public function getCategorie(): ?categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?categorie $categorie): static
    {
        $this->categorie = $categorie;
        return $this;
    }



     //getter et setters
     public function getCreatedAt(): \DateTime
     {
         return $this->createdAt;
     }
     
     public function setCreatedAt(\DateTime $createdAt): self
     {
         $this->createdAt = $createdAt;
         return $this;
     }
     
     public function getUpdatedAt(): \DateTime
     {
         return $this->updatedAt;
     }
     
     public function setUpdatedAt(\DateTime $updatedAt): self
     {
         $this->updatedAt = $updatedAt;
         return $this;
     }
}


