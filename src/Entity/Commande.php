<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "L'identifiant de la commande ne peut pas être vide.")]
    private ?int $id_commande = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "La date de commande est obligatoire.")]
    #[Assert\Type("\DateTimeInterface", message: "Veuillez entrer une date valide.")]
    private ?\DateTimeInterface $dateCommande = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le total est obligatoire.")]
    #[Assert\Positive(message: "Le total doit être un nombre positif.")]
    #[Assert\Type(type: "float", message: "Le total doit être un nombre décimal.")]
    private ?float $totale = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "La quantité est obligatoire.")]
    #[Assert\Positive(message: "La quantité doit être un nombre positif.")]
    #[Assert\Type(type: "integer", message: "La quantité doit être un nombre entier.")]
    private ?int $quantite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommande(): ?int
    {
        return $this->id_commande;
    }

    public function setIdCommande(int $id_commande): static
    {
        $this->id_commande = $id_commande;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): static
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    public function getTotale(): ?float
    {
        return $this->totale;
    }

    public function setTotale(float $totale): static
    {
        $this->totale = $totale;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }
}
