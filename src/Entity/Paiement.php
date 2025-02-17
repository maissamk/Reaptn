<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePaiement = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez choisir une méthode de paiement.")]
    private ?string $methodePaiement = null;

    #[ORM\OneToOne(inversedBy: 'paiement', targetEntity: Commande::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $commande;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(\DateTimeInterface $datePaiement): static
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    public function getMethodePaiement(): ?string
    {
        return $this->methodePaiement;
    }

    public function setMethodePaiement(string $methodePaiement): static
    {
        $this->methodePaiement = $methodePaiement;

        return $this;
    }
    public function getCommande(): ?Commande
    {
        return $this->commande;
    }
    
    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;
    
        return $this;
    }
    

}
