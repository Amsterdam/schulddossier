<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class PandenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPand
     */
    private $TPand;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPand
     */
    public function getTPand()
    {
        return $this->TPand;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TPand $TPand
     * @return PandenArray
     */
    public function withTPand($TPand)
    {
        $new = clone $this;
        $new->TPand = $TPand;

        return $new;
    }
}

