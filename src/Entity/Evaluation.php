<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $etatEvaluation = null;

    #[ORM\Column]
    private ?bool $satisfaction = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $impression = null;

    #[ORM\Column]
    private ?bool $satisfactionSce = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $impressionSce = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getEtatEvaluation(): ?int
    // {
    //     return $this->etatEvaluation;
    // }

    // public function setEtatEvaluation(?int $etatEvaluation): self
    // {
    //     $this->etatEvaluation = $etatEvaluation;

    //     return $this;
    // }

    public function isSatisfaction(): ?bool
    {
        return $this->satisfaction;
    }

    public function setSatisfaction(bool $satisfaction): self
    {
        $this->satisfaction = $satisfaction;

        return $this;
    }

    public function getImpression(): ?string
    {
        return $this->impression;
    }

    public function setImpression(?string $impression): self
    {
        $this->impression = $impression;

        return $this;
    }

    public function isSatisfactionSce(): ?bool
    {
        return $this->satisfactionSce;
    }

    public function setSatisfactionSce(bool $satisfactionSce): self
    {
        $this->satisfactionSce = $satisfactionSce;

        return $this;
    }

    public function getImpressionSce(): ?string
    {
        return $this->impressionSce;
    }

    public function setImpressionSce(?string $impressionSce): self
    {
        $this->impressionSce = $impressionSce;

        return $this;
    }
}
