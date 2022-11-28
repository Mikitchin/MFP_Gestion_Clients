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

    #[ORM\Column(nullable: true)]
    private ?int $etatEvaluation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtatEvaluation(): ?int
    {
        return $this->etatEvaluation;
    }

    public function setEtatEvaluation(?int $etatEvaluation): self
    {
        $this->etatEvaluation = $etatEvaluation;

        return $this;
    }
}
