<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PRSMutatieExtraArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSMutatieExtra
     */
    private $TPRSMutatieExtra;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSMutatieExtra
     */
    public function getTPRSMutatieExtra()
    {
        return $this->TPRSMutatieExtra;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSMutatieExtra $TPRSMutatieExtra
     * @return PRSMutatieExtraArray
     */
    public function withTPRSMutatieExtra($TPRSMutatieExtra)
    {
        $new = clone $this;
        $new->TPRSMutatieExtra = $TPRSMutatieExtra;

        return $new;
    }
}

