<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PRSMutatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSMutatie
     */
    private $TPRSMutatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSMutatie
     */
    public function getTPRSMutatie()
    {
        return $this->TPRSMutatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSMutatie $TPRSMutatie
     * @return PRSMutatieArray
     */
    public function withTPRSMutatie($TPRSMutatie)
    {
        $new = clone $this;
        $new->TPRSMutatie = $TPRSMutatie;

        return $new;
    }
}

