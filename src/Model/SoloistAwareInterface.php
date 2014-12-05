<?php

namespace Ctrl\Bundle\ConcertoBundle\Model;

use Doctrine\Common\NotifyPropertyChanged;
use Doctrine\Common\PropertyChangedListener;
use Doctrine\ORM\Mapping as ORM;

/**
 * Interface ConcertoMemberInterface
 *
 * Implement this on the non-tenant entities.
 *
 * Make sure your entities are set up with:
 */
interface SoloistAwareInterface
{
    /** @param Soloist $soloist */
    public function setSoloist(Soloist $soloist);
}
