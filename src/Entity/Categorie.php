<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    /**
     * @var Collection<int, Materielvente>
     */
    #[ORM\OneToMany(targetEntity: Materielvente::class, mappedBy: 'categorie')]
    private Collection $materielventes;

    public function __construct()
    {
        $this->materielventes = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Materielvente>
     */
    public function getMaterielventes(): Collection
    {
        return $this->materielventes;
    }

    public function addMaterielvente(Materielvente $materielvente): static
    {
        if (!$this->materielventes->contains($materielvente)) {
            $this->materielventes->add($materielvente);
            $materielvente->setCategorie($this);
        }

        return $this;
    }

    public function removeMaterielvente(Materielvente $materielvente): static
    {
        if ($this->materielventes->removeElement($materielvente)) {
            // set the owning side to null (unless already changed)
            if ($materielvente->getCategorie() === $this) {
                $materielvente->setCategorie(null);
            }
        }

        return $this;
    }
}
