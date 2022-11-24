<?php

namespace App\Entity;

use App\Repository\UniteAdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UniteAdminRepository::class)]
class UniteAdmin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codeDir = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleDir = null;

    #[ORM\OneToMany(mappedBy: 'codeDir', targetEntity: MotifRdv::class)]
    private Collection $motifRdvs;

    public function __construct()
    {
        $this->motifRdvs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDir(): ?string
    {
        return $this->codeDir;
    }

    public function setCodeDir(string $codeDir): self
    {
        $this->codeDir = $codeDir;

        return $this;
    }

    public function getLibelleDir(): ?string
    {
        return $this->libelleDir;
    }

    public function setLibelleDir(string $libelleDir): self
    {
        $this->libelleDir = $libelleDir;

        return $this;
    }

    /**
     * @return Collection<int, MotifRdv>
     */
    public function getMotifRdvs(): Collection
    {
        return $this->motifRdvs;
    }

    public function addMotifRdv(MotifRdv $motifRdv): self
    {
        if (!$this->motifRdvs->contains($motifRdv)) {
            $this->motifRdvs->add($motifRdv);
            $motifRdv->setCodeDir($this);
        }

        return $this;
    }

    public function removeMotifRdv(MotifRdv $motifRdv): self
    {
        if ($this->motifRdvs->removeElement($motifRdv)) {
            // set the owning side to null (unless already changed)
            if ($motifRdv->getCodeDir() === $this) {
                $motifRdv->setCodeDir(null);
            }
        }

        return $this;
    }
}
