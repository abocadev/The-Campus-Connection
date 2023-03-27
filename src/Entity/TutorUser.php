<?php

namespace App\Entity;

use App\Repository\TutorUserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TutorUserRepository::class)]
class TutorUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Tutor = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Alumn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTutor(): ?User
    {
        return $this->Tutor;
    }

    public function setTutor(?User $Tutor): self
    {
        $this->Tutor = $Tutor;

        return $this;
    }

    public function getAlumn(): ?User
    {
        return $this->Alumn;
    }

    public function setAlumn(?User $Alumn): self
    {
        $this->Alumn = $Alumn;

        return $this;
    }
}
