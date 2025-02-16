<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToOne(mappedBy: 'commande', targetEntity: Livraison::class, cascade: ['persist', 'remove'])]
    private ?Livraison $livraison = null;
    
    // Getter et Setter
    public function getLivraison(): ?Livraison
    {
        return $this->livraison;
    }
    
    public function setLivraison(Livraison $livraison): self
    {
        // Assurez la relation bidirectionnelle
        if ($livraison->getCommande() !== $this) {
            $livraison->setCommande($this);
        }
    
        $this->livraison = $livraison;
    
        return $this;
    }
    
    
   


    #[ORM\OneToOne(mappedBy: 'commande', targetEntity: Paiement::class, cascade: ['persist', 'remove'])]
    private ?Paiement $paiement = null;
    
    // Getter et Setter pour Paiement
    public function getPaiement(): ?Paiement
    {
        return $this->paiement;
    }
    
    public function setPaiement(Paiement $paiement): self
    {
        // Permet d'assurer que l'objet Paiement est lié à la commande
        if ($paiement->getCommande() !== $this) {
            $paiement->setCommande($this);
        }
    
        $this->paiement = $paiement;
    
        return $this;
    }
    


    #[ORM\OneToMany(mappedBy: 'commande', targetEntity: Materielvente::class, cascade: ['persist', 'remove'])]
private $materiels;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?User $user_id_commande = null;

public function __construct()
{
    $this->materiels = new ArrayCollection();
}

/**
 * @return Collection<int, Materielvente>
 */
public function getMateriels(): Collection
{
    return $this->materiels;
}

public function addMateriel(Materielvente $materiel): self
{
    if (!$this->materiels->contains($materiel)) {
        $this->materiels[] = $materiel;
        $materiel->setCommande($this);
    }

    return $this;
}

public function removeMateriel(Materielvente $materiel): self
{
    if ($this->materiels->removeElement($materiel)) {
        // Set the owning side to null (unless already changed)
        if ($materiel->getCommande() === $this) {
            $materiel->setCommande(null);
        }
    }

    return $this;
}

    
    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserIdCommande(): ?User
    {
        return $this->user_id_commande;
    }

    public function setUserIdCommande(?User $user_id_commande): static
    {
        $this->user_id_commande = $user_id_commande;

        return $this;
    }

   




    
}
