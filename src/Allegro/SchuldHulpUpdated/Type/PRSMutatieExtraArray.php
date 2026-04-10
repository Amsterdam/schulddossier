<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class PRSMutatieExtraArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSMutatieExtra
     */
    private $TPRSMutatieExtra;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSMutatieExtra
     */
    public function getTPRSMutatieExtra()
    {
        return $this->TPRSMutatieExtra;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPRSMutatieExtra $TPRSMutatieExtra
     * @return PRSMutatieExtraArray
     */
    public function withTPRSMutatieExtra($TPRSMutatieExtra)
    {
        $new = clone $this;
        $new->TPRSMutatieExtra = $TPRSMutatieExtra;

        return $new;
    }
}

