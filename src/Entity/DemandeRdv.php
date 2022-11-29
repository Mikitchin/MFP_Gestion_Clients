<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DemandeRdvRepository;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: DemandeRdvRepository::class)]
#[UniqueEntity('slug')]
class DemandeRdv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codeDde = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDde = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDemande = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateModifDde = null;

    #[ORM\Column(nullable: true)]
    private ?int $etatDemande = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\ManyToOne(inversedBy: 'demande_rdv')]
    private ?MotifRdv $codeMotif = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptDde = null;

    public function computeSlug(SluggerInterface $slugger)
    {
        if (!$this->slug || '-' === $this->slug) {
            $this->slug = (string) $slugger->slug((string) $this)->lower();
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDde(): ?string
    {
        return $this->codeDde;
    }

    public function setCodeDde(string $codeDde): self
    {
        $this->codeDde = $codeDde;

        return $this;
    }

    public function getDateDde(): ?\DateTimeInterface
    {
        return $this->dateDde;
    }

    public function setDateDde(\DateTimeInterface $dateDde): self
    {
        $this->dateDde = $dateDde;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeImmutable $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

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

    public function getEtatDemande(): ?int
    {
        return $this->etatDemande;
    }

    public function setEtatDemande(?int $etatDemande): self
    {
        $this->etatDemande = $etatDemande;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

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
}
