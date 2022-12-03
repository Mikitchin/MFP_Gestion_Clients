<?php

namespace App\EntityListener;

use App\Entity\DemandeRdv_old;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;

class DemandeRdvEntityListener
{
    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function prePersist(DemandeRdv_old $demande, LifecycleEventArgs $event)
    {
        $demande->computeSlug($this->slugger);
    }

    public function preUpdate(DemandeRdv_old $demande, LifecycleEventArgs $event)
    {
        $demande->computeSlug($this->slugger);
    }
}
