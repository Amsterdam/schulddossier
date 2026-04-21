<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SimpleDeltaChangeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDeltaChange
     */
    private $SimpleDeltaChange;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDeltaChange
     */
    public function getSimpleDeltaChange()
    {
        return $this->SimpleDeltaChange;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SimpleDeltaChange $SimpleDeltaChange
     * @return SimpleDeltaChangeArray
     */
    public function withSimpleDeltaChange($SimpleDeltaChange)
    {
        $new = clone $this;
        $new->SimpleDeltaChange = $SimpleDeltaChange;

        return $new;
    }
}

