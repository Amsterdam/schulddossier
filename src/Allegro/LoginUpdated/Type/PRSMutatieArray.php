<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PRSMutatieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatie
     */
    private $TPRSMutatie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatie
     */
    public function getTPRSMutatie()
    {
        return $this->TPRSMutatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatie $TPRSMutatie
     * @return PRSMutatieArray
     */
    public function withTPRSMutatie($TPRSMutatie)
    {
        $new = clone $this;
        $new->TPRSMutatie = $TPRSMutatie;

        return $new;
    }
}

