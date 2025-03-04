<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EmployeRepository::class)]
class Employe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    #[Assert\NotBlank(message: "User Identifier cannot be blank.")]
    #[Assert\Type(type: "integer", message: "User Identifier must be a number.")]
    private ?int $userIdentifier = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank(message: "Compétence cannot be blank.")]
    #[Assert\Length(min: 3, minMessage: "Compétence must be at least {{ limit }} characters.")]
    private ?string $comp = null;

    #[ORM\ManyToOne(inversedBy: 'employes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Offre $offre = null;

    #[ORM\ManyToOne(inversedBy: 'employes')]
    private ?user $user_id_employe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserIdentifier(): ?int
    {
        return $this->userIdentifier;
    }

    public function setUserIdentifier(int $userIdentifier): static
    {
        $this->userIdentifier = $userIdentifier;
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

    public function getOffre(): ?Offre
    {
        return $this->offre;
    }

    public function setOffre(?Offre $offre): static
    {
        $this->offre = $offre;
        return $this;
    }

    public function getUserIdEmploye(): ?user
    {
        return $this->user_id_employe;
    }

    public function setUserIdEmploye(?user $user_id_employe): static
    {
        $this->user_id_employe = $user_id_employe;

        return $this;
    }
}