<?php

namespace App\Entity;

use App\Repository\ParcelleProprietesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\NumberParseException;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: ParcelleProprietesRepository::class)]
class ParcelleProprietes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire')]
    #[Assert\Length(min: 3, max: 255, minMessage: 'Le titre doit avoir au moins {{ limit }} caractères', maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères')]
    private ?string $titre = null;
    
    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'La description est obligatoire')]
    #[Assert\Length(min: 10)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 0)]
    #[Assert\NotBlank(message: 'Le prix est obligatoire')]
    #[Assert\Positive(message: 'Le prix doit être un nombre positif')]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le statut est obligatoire')]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'emplacement est obligatoire')]
    private ?string $emplacement = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'La taille est obligatoire')]
    #[Assert\GreaterThanOrEqual(value: 1, message: 'La taille doit être supérieure ou égale à {{ value }}')]
    private ?float $taille = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de création est obligatoire')]
    #[Assert\Type("\DateTimeInterface", message: 'La date de création doit être une instance de DateTime')]
    private ?\DateTimeInterface $date_creation_annonce = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de mise à jour est obligatoire')]
    #[Assert\Type("\DateTimeInterface", message: 'La date de mise à jour doit être une instance de DateTime')]
    private ?\DateTimeInterface $date_misajour_annonce = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'La disponibilité doit être définie')]
    private ?bool $est_disponible = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom du propriétaire est obligatoire')]
    private ?string $nom_proprietaire = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le contact du propriétaire est obligatoire')]
    private ?string $contact_proprietaire = null;

    #[Assert\Callback]
    public function validatePhoneNumber(ExecutionContextInterface $context): void
    {
        $phoneUtil = PhoneNumberUtil::getInstance();

        try {
            // Parsing le numéro de téléphone avec le pays 'TN' pour la Tunisie
            $phoneNumber = $phoneUtil->parse($this->contact_proprietaire, 'TN');

            // Vérification si le numéro est valide
            if (!$phoneUtil->isValidNumber($phoneNumber)) {
                $context->buildViolation('Le numéro de téléphone est invalide.')
                    ->atPath('contact_proprietaire')
                    ->addViolation();
            }
        } catch (NumberParseException $e) {
            // En cas d'erreur lors du parsing du numéro
            $context->buildViolation('Format de numéro invalide. Veuillez vérifier le format du numéro.')
                ->atPath('contact_proprietaire')
                ->addViolation();
        }
    }

    /**
     * @var Collection<int, Contrat>
     */
    #[ORM\OneToMany(targetEntity: Contrat::class, mappedBy: 'parcelle')]
    private Collection $type_Contrat;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'parcelleProprietes')]
    private ?user $user_id_parcelle = null;

   
 #[ORM\Column(length: 255)]
         #[Assert\NotBlank(message: 'Le type de terrain est obligatoire')]
         private ?string $type_terrain = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $latitude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $longitude = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'email est obligatoire')]
    #[Assert\Email(message: 'L\'email doit être valide')]
    private ?string $email = null;
    

    

    public function __construct()
    {
        $this->type_Contrat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
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

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getDateCreationAnnonce(): ?\DateTimeInterface
    {
        return $this->date_creation_annonce;
    }

    public function setDateCreationAnnonce(\DateTimeInterface $date_creation_annonce): static
    {
        $this->date_creation_annonce = $date_creation_annonce;

        return $this;
    }

    public function getDateMisajourAnnonce(): ?\DateTimeInterface
    {
        return $this->date_misajour_annonce;
    }

    public function setDateMisajourAnnonce(\DateTimeInterface $date_misajour_annonce): static
    {
        $this->date_misajour_annonce = $date_misajour_annonce;

        return $this;
    }

    public function isEstDisponible(): ?bool
    {
        return $this->est_disponible;
    }

    public function setEstDisponible(bool $est_disponible): static
    {
        $this->est_disponible = $est_disponible;

        return $this;
    }

    public function getNomProprietaire(): ?string
    {
        return $this->nom_proprietaire;
    }

    public function setNomProprietaire(string $nom_proprietaire): static
    {
        $this->nom_proprietaire = $nom_proprietaire;

        return $this;
    }

    public function getContactProprietaire(): ?string
    {
        return $this->contact_proprietaire;
    }

    public function setContactProprietaire(string $contact_proprietaire): static
    {
        $this->contact_proprietaire = $contact_proprietaire;

        return $this;
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getTypeContrat(): Collection
    {
        return $this->type_Contrat;
    }

    public function addTypeContrat(Contrat $typeContrat): static
    {
        if (!$this->type_Contrat->contains($typeContrat)) {
            $this->type_Contrat->add($typeContrat);
            $typeContrat->setParcelle($this);
        }

        return $this;
    }

    public function removeTypeContrat(Contrat $typeContrat): static
    {
        if ($this->type_Contrat->removeElement($typeContrat)) {
            // set the owning side to null (unless already changed)
            if ($typeContrat->getParcelle() === $this) {
                $typeContrat->setParcelle(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getUserIdParcelle(): ?user
    {
        return $this->user_id_parcelle;
    }

    public function setUserIdParcelle(?user $user_id_parcelle): static
    {
        $this->user_id_parcelle = $user_id_parcelle;

        return $this;
    }

    public function getTypeTerrain(): ?string
    {
        return $this->type_terrain;
    }
    
    public function setTypeTerrain(string $type_terrain): static
    {
        $this->type_terrain = $type_terrain;
    
        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): static
    {
        $this->longitude = $longitude;

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
    

   

   
}
