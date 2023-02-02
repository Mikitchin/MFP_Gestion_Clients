<?php

namespace App\Entity;

use App\Repository\ObjetReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjetReclamationRepository::class)]
class ObjetReclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codeReclamation = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleReclamation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $objet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeReclamation(): ?string
    {
        return $this->codeReclamation;
    }

    public function setCodeReclamation(string $codeReclamation): self
    {
        $this->codeReclamation = $codeReclamation;

        return $this;
    }

    public function getLibelleReclamation(): ?string
    {
        return $this->libelleReclamation;
    }

    public function setLibelleReclamation(string $libelleReclamation): self
    {
        $this->libelleReclamation = $libelleReclamation;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(?string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }
}
