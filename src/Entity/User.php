<?php

namespace App\Entity;

use App\Repository\UserRepository;
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
}
