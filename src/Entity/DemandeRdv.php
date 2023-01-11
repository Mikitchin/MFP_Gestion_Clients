<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DemandeRdvRepository;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: DemandeRdvRepository::class)]
// #[UniqueEntity('slug')]
class DemandeRdv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codeDde = null;

    // #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    // private ?\DateTimeInterface $dateDde = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDemande = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateModifDde = null;

    // #[ORM\Column(type: 'string', length: 255, unique: true)]
    // private ?string $slug = null;

    #[ORM\ManyToOne(inversedBy: 'demande_rdv')]
    private ?MotifRdv $codeMotif = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptDde = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'demandeRdvs')]
    private ?User $users = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $heureRdv = null;

    #[ORM\ManyToOne(inversedBy: 'demandeRdvs')]
    private ?EtatDemande $etatDemandes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observationAc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observationGest = null;


    // public function computeSlug(SluggerInterface $slugger)
    // {
    //     if (!$this->slug || '-' === $this->slug) {
    //         $this->slug = (string) $slugger->slug((string) $this)->lower();
    //     }
    // }

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->dateModifDde = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDde(): ?string
    {
        return $this->codeDde;
        // Générer un code de la demande

    }

    public function setCodeDde(string $codeDde): self
    {
        $this->codeDde = $codeDde;

        return $this;
    }

    // public function getDateDde(): ?\DateTimeInterface
    // {
    //     return $this->dateDde;
    // }

    // public function setDateDde(\DateTimeInterface $dateDde): self
    // {
    //     $this->dateDde = $dateDde;

    //     return $this;
    // }


    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(\DateTimeInterface $dateDemande): self
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getDateModifDde(): ?\DateTimeInterface
    {
        return $this->dateModifDde;
    }

    public function setDateModifDde(?\DateTimeInterface $dateModifDde): self
    {
        $this->dateModifDde = $dateModifDde;

        return $this;
    }

    // public function getSlug(): ?string
    // {
    //     return $this->slug;
    // }

    // public function setSlug(string $slug): self
    // {
    //     $this->slug = $slug;

    //     return $this;
    // }

    public function getCodeMotif(): ?MotifRdv
    {
        return $this->codeMotif;
    }

    public function setCodeMotif(?MotifRdv $codeMotif): self
    {
        $this->codeMotif = $codeMotif;

        return $this;
    }

    public function getDescriptDde(): ?string
    {
        return $this->descriptDde;
    }

    public function setDescriptDde(?string $descriptDde): self
    {
        $this->descriptDde = $descriptDde;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt ?? new DateTime();
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getHeureRdv(): ?string
    {
        return $this->heureRdv;
    }

    public function setHeureRdv(?string $heureRdv): self
    {
        $this->heureRdv = $heureRdv;

        return $this;
    }

    public function getEtatDemandes(): ?EtatDemande
    {
        return $this->etatDemandes;
    }

    public function setEtatDemandes(?EtatDemande $etatDemandes): self
    {
        $this->etatDemandes = $etatDemandes;

        return $this;
    }

    public function getObservationAc(): ?string
    {
        return $this->observationAc;
    }

    public function setObservationAc(?string $observationAc): self
    {
        $this->observationAc = $observationAc;

        return $this;
    }

    public function getObservationGest(): ?string
    {
        return $this->observationGest;
    }

    public function setObservationGest(?string $observationGest): self
    {
        $this->observationGest = $observationGest;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getCodeDde();
    }
}
