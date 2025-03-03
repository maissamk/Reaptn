<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'Email est requis.')]
    #[Assert\Email(message: 'Le format de l\'email est invalide.')]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;


    #[ORM\Column(type: 'string', length: 255)]
#[Assert\NotBlank(message: 'Le nom est requis.')]
#[Assert\Length(min: 2, max: 255, minMessage: 'Le nom doit comporter au moins {{ limit }} caractères.')]
#[Assert\Regex(pattern: '/^[a-zA-ZÀ-ÿ\s]+$/', message: 'Le nom ne doit pas contenir de chiffres ni de caractères spéciaux.')]
private ?string $nom = null;

#[ORM\Column(type: 'string', length: 255)]
#[Assert\NotBlank(message: 'Le prénom est requis.')]
#[Assert\Length(min: 2, max: 255, minMessage: 'Le prénom doit comporter au moins {{ limit }} caractères.')]
#[Assert\Regex(pattern: '/^[a-zA-ZÀ-ÿ\s]+$/', message: 'Le prénom ne doit pas contenir de chiffres ni de caractères spéciaux.')]
private ?string $prenom = null;

#[ORM\Column(type: 'string', length: 255)]
#[Assert\NotBlank(message: 'Le numéro de téléphone est requis.')]
#[Assert\Regex(pattern: '/^\d{8}$/', message: 'Le numéro de téléphone doit être composé de 8 chiffres.')]
private ?string $telephone = null;

#[ORM\Column(nullable: true)]
private ?string $avatar = null;

/**
 * @var Collection<int, ParcelleProprietes>
 */
#[ORM\OneToMany(targetEntity: ParcelleProprietes::class, mappedBy: 'user_id_parcelle')]
private Collection $parcelleProprietes;

/**
 * @var Collection<int, Materielvente>
 */
#[ORM\OneToMany(targetEntity: Materielvente::class, mappedBy: 'user_id_materielvente')]
private Collection $materielventes;

/**
 * @var Collection<int, Materiellocation>
 */
#[ORM\OneToMany(targetEntity: Materiellocation::class, mappedBy: 'user_id_materiellocation')]
private Collection $materiellocations;

/**
 * @var Collection<int, Commande>
 */
#[ORM\OneToMany(targetEntity: Commande::class, mappedBy: 'user_id_commande')]
private Collection $commandes;

/**
 * @var Collection<int, Employe>
 */
#[ORM\OneToMany(targetEntity: Employe::class, mappedBy: 'user_id_employe')]
private Collection $employes;

/**
 * @var Collection<int, Contrat>
 */
#[ORM\OneToMany(targetEntity: Contrat::class, mappedBy: 'user_id_contrat')]
private Collection $contrats;
#[ORM\Column(length: 20)]
private ?string $status = 'inactive';

#[ORM\Column(nullable: true)]
private ?int $loginAttempts = null;

#[ORM\Column(length: 255, nullable: true)]
private ?string $google_id = null;

#[ORM\Column(type: 'string', length: 255, nullable: true)]
private ?string $faceToken = null;

#[ORM\Column(type: 'string', length: 255, nullable: true)]
private ?string $faceImagePath = null;


public function __construct()
{
    $this->parcelleProprietes = new ArrayCollection();
    $this->materielventes = new ArrayCollection();
    $this->materiellocations = new ArrayCollection();
    $this->commandes = new ArrayCollection();
    $this->employes = new ArrayCollection();
    $this->contrats = new ArrayCollection();
    //$this->status = 'active';
}



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
{
    $roles = $this->roles;

    // Guarantee that every user has at least ROLE_USER
    //$roles[] = 'ROLE_USER';
   // $roles[] = 'samar';

    return array_unique($roles);
}


    /**
     * @param list<string> $roles
     */
    public function setRoles($roles): static
    {
        // Ensure $roles is an array
        $this->roles = is_array($roles) ? $roles : [$roles];
    
        return $this;
    }
    

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }
    
    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, ParcelleProprietes>
     */
    public function getParcelleProprietes(): Collection
    {
        return $this->parcelleProprietes;
    }

    public function addParcellePropriete(ParcelleProprietes $parcellePropriete): static
    {
        if (!$this->parcelleProprietes->contains($parcellePropriete)) {
            $this->parcelleProprietes->add($parcellePropriete);
            $parcellePropriete->setUserIdParcelle($this);
        }

        return $this;
    }

    public function removeParcellePropriete(ParcelleProprietes $parcellePropriete): static
    {
        if ($this->parcelleProprietes->removeElement($parcellePropriete)) {
            // set the owning side to null (unless already changed)
            if ($parcellePropriete->getUserIdParcelle() === $this) {
                $parcellePropriete->setUserIdParcelle(null);
            }
        }

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
            $materielvente->setUserIdMaterielvente($this);
        }

        return $this;
    }

    public function removeMaterielvente(Materielvente $materielvente): static
    {
        if ($this->materielventes->removeElement($materielvente)) {
            // set the owning side to null (unless already changed)
            if ($materielvente->getUserIdMaterielvente() === $this) {
                $materielvente->setUserIdMaterielvente(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Materiellocation>
     */
    public function getMateriellocations(): Collection
    {
        return $this->materiellocations;
    }

    public function addMateriellocation(Materiellocation $materiellocation): static
    {
        if (!$this->materiellocations->contains($materiellocation)) {
            $this->materiellocations->add($materiellocation);
            $materiellocation->setUserIdMateriellocation($this);
        }

        return $this;
    }

    public function removeMateriellocation(Materiellocation $materiellocation): static
    {
        if ($this->materiellocations->removeElement($materiellocation)) {
            // set the owning side to null (unless already changed)
            if ($materiellocation->getUserIdMateriellocation() === $this) {
                $materiellocation->setUserIdMateriellocation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): static
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes->add($commande);
            $commande->setUserIdCommande($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): static
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getUserIdCommande() === $this) {
                $commande->setUserIdCommande(null);
            }
        }

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
            $employe->setUserIdEmploye($this);
        }

        return $this;
    }

    public function removeEmploye(Employe $employe): static
    {
        if ($this->employes->removeElement($employe)) {
            // set the owning side to null (unless already changed)
            if ($employe->getUserIdEmploye() === $this) {
                $employe->setUserIdEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getContrats(): Collection
    {
        return $this->contrats;
    }

    public function addContrat(Contrat $contrat): static
    {
        if (!$this->contrats->contains($contrat)) {
            $this->contrats->add($contrat);
            $contrat->setUserIdContrat($this);
        } return $this;
    }
    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function removeContrat(Contrat $contrat): static
    {
        if ($this->contrats->removeElement($contrat)) {
            // set the owning side to null (unless already changed)
            if ($contrat->getUserIdContrat() === $this) {
                $contrat->setUserIdContrat(null);
            }
        }

        return $this;
    }

       
    public function getLoginAttempts(): ?int
    {
        return $this->loginAttempts;
    }

    public function setLoginAttempts(?int $loginAttempts): static
    {
        $this->loginAttempts = $loginAttempts;

        return $this;
    }
    public function incrementLoginAttempts(): static
{
    $this->loginAttempts = $this->loginAttempts ? $this->loginAttempts + 1 : 1;

    return $this;
}

    public function getGoogleId(): ?string
    {
        return $this->google_id;
    }

    public function setGoogleId(?string $google_id): static
    {
        $this->google_id = $google_id;

        return $this;
    }
    public function getFaceToken(): ?string
    {
        return $this->faceToken;
    }

    public function setFaceToken(?string $faceToken): self
    {
        $this->faceToken = $faceToken;
        return $this;
    }

    public function getFaceImagePath(): ?string
    {
        return $this->faceImagePath;
    }

    public function setFaceImagePath(?string $faceImagePath): self
    {
        $this->faceImagePath = $faceImagePath;
        return $this;
    }
}

