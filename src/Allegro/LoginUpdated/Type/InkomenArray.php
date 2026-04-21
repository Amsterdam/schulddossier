<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class InkomenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TInkomen
     */
    private $TInkomen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TInkomen
     */
    public function getTInkomen()
    {
        return $this->TInkomen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TInkomen $TInkomen
     * @return InkomenArray
     */
    public function withTInkomen($TInkomen)
    {
        $new = clone $this;
        $new->TInkomen = $TInkomen;

        return $new;
    }
}
