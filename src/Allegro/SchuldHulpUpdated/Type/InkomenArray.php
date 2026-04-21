<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class InkomenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TInkomen
     */
    private $TInkomen;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TInkomen
     */
    public function getTInkomen()
    {
        return $this->TInkomen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TInkomen $TInkomen
     * @return InkomenArray
     */
    public function withTInkomen($TInkomen)
    {
        $new = clone $this;
        $new->TInkomen = $TInkomen;

        return $new;
    }
}

