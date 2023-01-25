<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $fonctionnaire = null;

    #[ORM\Column(length: 16)]
    private ?string $sexe = null;

    #[ORM\ManyToOne(inversedBy: 'objet')]
    private ?Structure $structure = null;

    #[ORM\ManyToOne(inversedBy: 'objet')]
    private ?MotifRdv $objet = null;

    #[ORM\Column(length: 255)]
    private ?string $motif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isFonctionnaire(): ?bool
    {
        return $this->fonctionnaire;
    }

    public function setFonctionnaire(bool $fonctionnaire): self
    {
        $this->fonctionnaire = $fonctionnaire;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    public function setStructure(?Structure $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function getObjet(): ?MotifRdv
    {
        return $this->objet;
    }

    public function setObjet(?MotifRdv $objet): self
    {
        $this->objet = $objet;

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
}
