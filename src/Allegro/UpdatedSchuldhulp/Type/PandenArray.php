<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PandenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPand
     */
    private $TPand;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPand
     */
    public function getTPand()
    {
        return $this->TPand;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPand $TPand
     * @return PandenArray
     */
    public function withTPand($TPand)
    {
        $new = clone $this;
        $new->TPand = $TPand;

        return $new;
    }
}

