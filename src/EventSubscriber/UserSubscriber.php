<?php

namespace App\EventSubscriber;

use App\Entity\Historical;
use App\Entity\User;
use Doctrine\ORM\Events;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;

#[AsEntityListener(event:Events::prePersist, method:'createHistorical', entity:User::class)]
class UserSubscriber
{
    public static function createHistorical(User $user): void
    {   
        
    }
}
