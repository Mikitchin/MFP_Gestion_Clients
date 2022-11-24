<?php

namespace App\Entity;

use App\Repository\MotifRdvRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MotifRdvRepository::class)]
class MotifRdv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codeMotif = null;

    #[ORM\Column(length: 255)]
    private ?string $motif = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createAt = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleMotif = null;

    #[ORM\ManyToOne(inversedBy: 'motifRdvs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UniteAdmin $codeDir = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeMotif(): ?string
    {
        return $this->codeMotif;
    }

    public function setCodeMotif(string $codeMotif): self
    {
        $this->codeMotif = $codeMotif;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

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

    public function getLibelleMotif(): ?string
    {
        return $this->libelleMotif;
    }

    public function setLibelleMotif(string $libelleMotif): self
    {
        $this->libelleMotif = $libelleMotif;

        return $this;
    }

    public function getCodeDir(): ?UniteAdmin
    {
        return $this->codeDir;
    }

    public function setCodeDir(?UniteAdmin $codeDir): self
    {
        $this->codeDir = $codeDir;

        return $this;
    }
}
