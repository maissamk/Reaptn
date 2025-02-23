<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "L'identifiant A est obligatoire.")]
    #[Assert\Positive(message: "L'identifiant A doit être un nombre positif.")]
    #[Assert\Type(type: 'integer', message: "L'identifiant A doit être un entier.")]
    #[Assert\Regex(
        pattern: "/^\d+$/",
        message: "L'identifiant A ne doit contenir que des chiffres."
    )]
    private ?int $ida = null;

    #[ORM\Column(nullable: true)]
    #[Assert\PositiveOrZero(message: "L'identifiant E doit être un nombre positif ou zéro.")]
    #[Assert\Type(type: 'integer', message: "L'identifiant E doit être un entier.")]
    #[Assert\Regex(
        pattern: "/^\d*$/",
        message: "L'identifiant E ne doit contenir que des chiffres."
    )]
    private ?int $ide = null;

    #[ORM\Column(options: ["default" => false])]
    #[Assert\NotNull(message: "Le statut est obligatoire.")]
    private ?bool $statut = false;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        max: 255,
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Type(type: 'string', message: "La description doit être une chaîne de caractères.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z0-9\s\-\.,!?()]*$/",
        message: "La description ne doit pas contenir de caractères spéciaux interdits (*, %, $, etc.)."
    )]
    private ?string $descr = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le titre est obligatoire.")]
    #[Assert\Length(
        min: 5,
        minMessage: "Le titre doit contenir au moins {{ limit }} caractères.",
        max: 100,
        maxMessage: "Le titre ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Type(type: 'string', message: "Le titre doit être une chaîne de caractères.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z0-9\s\-\.,!?()]*$/",
        message: "Le titre ne doit pas contenir de caractères spéciaux interdits (*, %, $, etc.)."
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(
        max: 100,
        maxMessage: "Les compétences ne peuvent pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Type(type: 'string', message: "Les compétences doivent être une chaîne de caractères.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z0-9\s\-\.,!?()]*$/",
        message: "Les compétences ne doivent pas contenir de caractères spéciaux interdits (*, %, $, etc.)."
    )]
    private ?string $comp = null;

    /**
     * @var Collection<int, Employe>
     */
    #[ORM\OneToMany(targetEntity: Employe::class, mappedBy: 'offre', orphanRemoval: true)]
    private Collection $employes;

    public function __construct()
    {
        $this->employes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIda(): ?int
    {
        return $this->ida;
    }

    public function setIda(int $ida): static
    {
        $this->ida = $ida;
        return $this;
    }

    public function getIde(): ?int
    {
        return $this->ide;
    }

    public function setIde(?int $ide): static
    {
        $this->ide = $ide;
        return $this;
    }

    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getDescr(): ?string
    {
        return $this->descr;
    }

    public function setDescr(?string $descr): static
    {
        $this->descr = $descr;
        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
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

    /**
     * @return Collection<int, Employe>
     */
    public function getEmployes(): Collection
    {
        return $this->employes;
    }

    public function addEmploye(Employe $employe): static
    {
        if (!$this->employes->contains($employe)) {
            $this->employes->add($employe);
            $employe->setOffre($this);
        }

        return $this;
    }

    public function removeEmploye(Employe $employe): static
    {
        if ($this->employes->removeElement($employe)) {
            if ($employe->getOffre() === $this) {
                $employe->setOffre(null);
            }
        }

        return $this;
    }
}
