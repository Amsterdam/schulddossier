<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class InkomenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TInkomen
     */
    private $TInkomen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TInkomen
     */
    public function getTInkomen()
    {
        return $this->TInkomen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TInkomen $TInkomen
     * @return InkomenArray
     */
    public function withTInkomen($TInkomen)
    {
        $new = clone $this;
        $new->TInkomen = $TInkomen;

        return $new;
    }
}

