<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class PRSMutatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSMutatie
     */
    private $TPRSMutatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSMutatie
     */
    public function getTPRSMutatie()
    {
        return $this->TPRSMutatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSMutatie $TPRSMutatie
     * @return PRSMutatieArray
     */
    public function withTPRSMutatie($TPRSMutatie)
    {
        $new = clone $this;
        $new->TPRSMutatie = $TPRSMutatie;

        return $new;
    }
}

