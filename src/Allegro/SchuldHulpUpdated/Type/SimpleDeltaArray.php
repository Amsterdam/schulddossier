<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SimpleDeltaArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDelta
     */
    private $SimpleDelta;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDelta
     */
    public function getSimpleDelta()
    {
        return $this->SimpleDelta;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDelta $SimpleDelta
     * @return SimpleDeltaArray
     */
    public function withSimpleDelta($SimpleDelta)
    {
        $new = clone $this;
        $new->SimpleDelta = $SimpleDelta;

        return $new;
    }
}

