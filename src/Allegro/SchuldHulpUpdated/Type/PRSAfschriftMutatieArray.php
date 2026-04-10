<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class PRSAfschriftMutatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschriftMutatie
     */
    private $TPRSAfschriftMutatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschriftMutatie
     */
    public function getTPRSAfschriftMutatie()
    {
        return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSAfschriftMutatie $TPRSAfschriftMutatie
     * @return PRSAfschriftMutatieArray
     */
    public function withTPRSAfschriftMutatie($TPRSAfschriftMutatie)
    {
        $new = clone $this;
        $new->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;

        return $new;
    }
}

