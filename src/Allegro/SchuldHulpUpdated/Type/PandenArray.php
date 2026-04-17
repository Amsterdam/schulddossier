<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PandenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPand
     */
    private $TPand;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPand
     */
    public function getTPand()
    {
        return $this->TPand;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPand $TPand
     * @return PandenArray
     */
    public function withTPand($TPand)
    {
        $new = clone $this;
        $new->TPand = $TPand;

        return $new;
    }
}

