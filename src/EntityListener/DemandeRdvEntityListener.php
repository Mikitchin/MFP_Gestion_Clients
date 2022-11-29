<?php

namespace App\EntityListener;

use App\Entity\DemandeRdv;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;

class DemandeRdvEntityListener
{
    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function prePersist(DemandeRdv $demande, LifecycleEventArgs $event)
    {
        $demande->computeSlug($this->slugger);
    }

    public function preUpdate(DemandeRdv $demande, LifecycleEventArgs $event)
    {
        $demande->computeSlug($this->slugger);
    }
}
