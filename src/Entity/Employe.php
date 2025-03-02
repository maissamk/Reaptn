<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\DBAL\Types\Types;
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
    
    #[Assert\Type(type: "integer", message: "User Identifier must be a number.")]
    private ?int $userIdentifier = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank(message: "Compétence cannot be blank.")]
    #[Assert\Length(min: 3, minMessage: "Compétence must be at least {{ limit }} characters.")]
    private ?string $comp = null;

    #[ORM\ManyToOne(inversedBy: 'employes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Offre $offre = null;

    #[ORM\Column(type: 'array', nullable: true)]
    private ?array $dispo = []; 

    #[ORM\Column(nullable: true)]
    private ?bool $conf = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_join = null;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private ?bool $suggested = false;

    public function __construct()
    {
    $this->date_join = new \DateTime(); // ✅ Sets default to the current date/time
    }

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

    public function getDispo(): ?array
    {
        return $this->dispo;
    }

    public function setDispo(?array $dispo): static
    {
        $this->dispo = $dispo;
        return $this;
    }

    public function isConf(): ?bool
    {
        return $this->conf;
    }

    public function setConf(bool $conf): self
    {
        $this->conf = $conf;
        return $this;
    }

    public function getDateJoin(): ?\DateTimeInterface
    {
        return $this->date_join;
    }

    public function setDateJoin(?\DateTimeInterface $date_join): self
    {
        $this->date_join = $date_join;

        return $this;
    }

    public function setSuggested(bool $suggested): self
    {
        $this->suggested = $suggested;
        return $this;
    }

    public function getSuggested(): bool
    {
        return $this->suggested ?? false;  
    }
}