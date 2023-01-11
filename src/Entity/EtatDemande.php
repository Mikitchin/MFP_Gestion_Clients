<?php

namespace App\Entity;

use App\Repository\EtatDemandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtatDemandeRepository::class)]
class EtatDemande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $etatDemande = null;

    #[ORM\OneToMany(mappedBy: 'etatDemandes', targetEntity: DemandeRdv::class)]
    private Collection $demandeRdvs;

    public function __construct()
    {
        $this->demandeRdvs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtatDemande(): ?string
    {
        return $this->etatDemande;
    }

    public function setEtatDemande(?string $etatDemande): self
    {
        $this->etatDemande = $etatDemande;

        return $this;
    }

    /**
     * @return Collection<int, DemandeRdv>
     */
    public function getDemandeRdvs(): Collection
    {
        return $this->demandeRdvs;
    }

    public function addDemandeRdv(DemandeRdv $demandeRdv): self
    {
        if (!$this->demandeRdvs->contains($demandeRdv)) {
            $this->demandeRdvs->add($demandeRdv);
            $demandeRdv->setEtatDemandes($this);
        }

        return $this;
    }

    public function removeDemandeRdv(DemandeRdv $demandeRdv): self
    {
        if ($this->demandeRdvs->removeElement($demandeRdv)) {
            // set the owning side to null (unless already changed)
            if ($demandeRdv->getEtatDemandes() === $this) {
                $demandeRdv->setEtatDemandes(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getEtatDemande();
    }
}
