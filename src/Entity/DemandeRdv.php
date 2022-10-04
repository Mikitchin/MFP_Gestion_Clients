<?php

namespace App\Entity;

use App\Repository\DemandeRdvRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeRdvRepository::class)]
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
    private ?\DateTimeImmutable $createAt = null;

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
}
