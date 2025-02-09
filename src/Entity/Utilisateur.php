<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide.")]
    #[Assert\Length(max: 30, maxMessage: "Le nom ne doit pas dépasser 30 caractères.")]
    private ?string $nom = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Le prénom ne peut pas être vide.")]
    #[Assert\Length(max: 30, maxMessage: "Le prénom ne doit pas dépasser 30 caractères.")]
    private ?string $prenom = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "L'email est requis.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    #[Assert\Length(max: 50, maxMessage: "L'email ne doit pas dépasser 50 caractères.")]
    private ?string $email = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le mot de passe est requis.")]
    #[Assert\Length(min: 8, minMessage: "Le mot de passe doit contenir au moins 8 caractères.")]
    private ?string $mdp = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le numéro de téléphone est requis.")]
    #[Assert\Positive(message: "Le numéro de téléphone doit être positif.")]
    #[Assert\Regex(pattern: "/^\d{8}$/", message: "Le numéro de téléphone doit contenir exactement 8 chiffres.")]
    private ?int $tele = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Le rôle est requis.")]
    #[Assert\Choice(choices: ["agriculteur", "client", "admin"], message: "Le rôle doit être 'agriculteur', 'client' ou 'admin'.")]
    private ?string $role = null;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
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

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getTele(): ?int
    {
        return $this->tele;
    }

    public function setTele(int $tele): static
    {
        $this->tele = $tele;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }
}
