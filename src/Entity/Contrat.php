<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'type_Contrat')]
    #[Assert\NotNull(message: "La parcelle ne doit pas être vide.")]
    private ?ParcelleProprietes $parcelle = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "La date de début du contrat ne doit pas être vide.")]
    #[Assert\Type("\DateTimeInterface", message: "La date de début doit être une date valide.")]
    private ?\DateTimeInterface $dateDebut_contrat = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "La date de fin du contrat ne doit pas être vide.")]
    #[Assert\Type("\DateTimeInterface", message: "La date de fin doit être une date valide.")]
    #[Assert\Expression(
        "this.getDatefinContrat() > this.getDateDebutContrat()",
        message: "La date de fin doit être postérieure à la date de début."
    )]
    private ?\DateTimeInterface $datefin_contrat = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de l'acheteur ne doit pas être vide.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "Le nom de l'acheteur ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $nom_Acheteur = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom du vendeur ne doit pas être vide.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "Le nom du vendeur ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $nom_Vendeur = null;



    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champs informations contart ne peut pas etre vide.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "Ce champs ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $information_Contrat = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datecreation_contrat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParcelle(): ?ParcelleProprietes
    {
        return $this->parcelle;
    }

    public function setParcelle(?ParcelleProprietes $parcelle): static
    {
        $this->parcelle = $parcelle;

        return $this;
    }

    public function getDateDebutContrat(): ?\DateTimeInterface
    {
        return $this->dateDebut_contrat;
    }

    public function setDateDebutContrat(\DateTimeInterface $dateDebut_contrat): static
    {
        $this->dateDebut_contrat = $dateDebut_contrat;

        return $this;
    }

    public function getDatefinContrat(): ?\DateTimeInterface
    {
        return $this->datefin_contrat;
    }

    public function setDatefinContrat(\DateTimeInterface $datefin_contrat): static
    {
        $this->datefin_contrat = $datefin_contrat;

        return $this;
    }

    public function getNomAcheteur(): ?string
    {
        return $this->nom_Acheteur;
    }

    public function setNomAcheteur(string $nom_Acheteur): static
    {
        $this->nom_Acheteur = $nom_Acheteur;

        return $this;
    }

    public function getNomVendeur(): ?string
    {
        return $this->nom_Vendeur;
    }

    public function setNomVendeur(string $nom_Vendeur): static
    {
        $this->nom_Vendeur = $nom_Vendeur;

        return $this;
    }

    public function getInformationContrat(): ?string
    {
        return $this->information_Contrat;
    }

    public function setInformationContrat(string $information_Contrat): static
    {
        $this->information_Contrat = $information_Contrat;

        return $this;
    }

    public function getDatecreationContrat(): ?\DateTimeInterface
    {
        return $this->datecreation_contrat;
    }

    public function setDatecreationContrat(\DateTimeInterface $datecreation_contrat): static
    {
        $this->datecreation_contrat = $datecreation_contrat;

        return $this;
    }
}
