<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PandenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPand
     */
    private $TPand;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPand
     */
    public function getTPand()
    {
        return $this->TPand;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPand $TPand
     * @return PandenArray
     */
    public function withTPand($TPand)
    {
        $new = clone $this;
        $new->TPand = $TPand;

        return $new;
    }
}
