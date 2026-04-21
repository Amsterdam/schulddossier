<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PRSMutatieExtraArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatieExtra
     */
    private $TPRSMutatieExtra;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatieExtra
     */
    public function getTPRSMutatieExtra()
    {
        return $this->TPRSMutatieExtra;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPRSMutatieExtra $TPRSMutatieExtra
     * @return PRSMutatieExtraArray
     */
    public function withTPRSMutatieExtra($TPRSMutatieExtra)
    {
        $new = clone $this;
        $new->TPRSMutatieExtra = $TPRSMutatieExtra;

        return $new;
    }
}

