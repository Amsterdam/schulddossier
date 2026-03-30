<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PRSAfschriftMutatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschriftMutatie
     */
    private $TPRSAfschriftMutatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschriftMutatie
     */
    public function getTPRSAfschriftMutatie()
    {
        return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschriftMutatie $TPRSAfschriftMutatie
     * @return PRSAfschriftMutatieArray
     */
    public function withTPRSAfschriftMutatie($TPRSAfschriftMutatie)
    {
        $new = clone $this;
        $new->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;

        return $new;
    }
}

