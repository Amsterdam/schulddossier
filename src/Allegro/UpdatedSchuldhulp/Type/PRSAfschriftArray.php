<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PRSAfschriftArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschrift
     */
    private $TPRSAfschrift;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschrift
     */
    public function getTPRSAfschrift()
    {
        return $this->TPRSAfschrift;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPRSAfschrift $TPRSAfschrift
     * @return PRSAfschriftArray
     */
    public function withTPRSAfschrift($TPRSAfschrift)
    {
        $new = clone $this;
        $new->TPRSAfschrift = $TPRSAfschrift;

        return $new;
    }
}

