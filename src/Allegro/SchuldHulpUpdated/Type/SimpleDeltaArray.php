<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SimpleDeltaArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDelta
     */
    private $SimpleDelta;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDelta
     */
    public function getSimpleDelta()
    {
        return $this->SimpleDelta;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDelta $SimpleDelta
     * @return SimpleDeltaArray
     */
    public function withSimpleDelta($SimpleDelta)
    {
        $new = clone $this;
        $new->SimpleDelta = $SimpleDelta;

        return $new;
    }
}

