<?php

namespace App\Entity;

use App\Repository\OffersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffersRepository::class)]
class Offers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Company $Company = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Modality $Modality = null;

    #[ORM\Column]
    private ?int $Positions = null;


    #[ORM\Column]
    private ?bool $Activated = null;

    #[ORM\Column]
    private ?bool $ActivatedByAdmin = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CreationDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $UpdatedDate = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?CategoriesOffers $Category = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?LocalitiesOffers $Locality = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?WeeklyHoursOffers $WeeklyHours = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->Company;
    }

    public function setCompany(?Company $Company): self
    {
        $this->Company = $Company;

        return $this;
    }

    public function getModality(): ?Modality
    {
        return $this->Modality;
    }

    public function setModality(?Modality $Modality): self
    {
        $this->Modality = $Modality;

        return $this;
    }

    public function getPositions(): ?int
    {
        return $this->Positions;
    }

    public function setPositions(int $Positions): self
    {
        $this->Positions = $Positions;

        return $this;
    }

    public function isActivated(): ?bool
    {
        return $this->Activated;
    }

    public function setActivated(bool $Activated): self
    {
        $this->Activated = $Activated;

        return $this;
    }

    public function isActivatedByAdmin(): ?bool
    {
        return $this->ActivatedByAdmin;
    }

    public function setActivatedByAdmin(bool $ActivatedByAdmin): self
    {
        $this->ActivatedByAdmin = $ActivatedByAdmin;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->CreationDate;
    }

    public function setCreationDate(\DateTimeInterface $CreationDate): self
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }

    public function getUpdatedDate(): ?\DateTimeInterface
    {
        return $this->UpdatedDate;
    }

    public function setUpdatedDate(\DateTimeInterface $UpdatedDate): self
    {
        $this->UpdatedDate = $UpdatedDate;

        return $this;
    }

    public function getCategory(): ?CategoriesOffers
    {
        return $this->Category;
    }

    public function setCategory(?CategoriesOffers $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getLocality(): ?LocalitiesOffers
    {
        return $this->Locality;
    }

    public function setLocality(?LocalitiesOffers $Locality): self
    {
        $this->Locality = $Locality;

        return $this;
    }

    public function getWeeklyHours(): ?WeeklyHoursOffers
    {
        return $this->WeeklyHours;
    }

    public function setWeeklyHours(?WeeklyHoursOffers $WeeklyHours): self
    {
        $this->WeeklyHours = $WeeklyHours;

        return $this;
    }
}
