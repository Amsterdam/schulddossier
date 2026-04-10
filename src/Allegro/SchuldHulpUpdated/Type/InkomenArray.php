<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class InkomenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TInkomen
     */
    private $TInkomen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TInkomen
     */
    public function getTInkomen()
    {
        return $this->TInkomen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TInkomen $TInkomen
     * @return InkomenArray
     */
    public function withTInkomen($TInkomen)
    {
        $new = clone $this;
        $new->TInkomen = $TInkomen;

        return $new;
    }
}

