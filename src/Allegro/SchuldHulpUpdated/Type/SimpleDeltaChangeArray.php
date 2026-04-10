<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SimpleDeltaChangeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDeltaChange
     */
    private $SimpleDeltaChange;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDeltaChange
     */
    public function getSimpleDeltaChange()
    {
        return $this->SimpleDeltaChange;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleDeltaChange $SimpleDeltaChange
     * @return SimpleDeltaChangeArray
     */
    public function withSimpleDeltaChange($SimpleDeltaChange)
    {
        $new = clone $this;
        $new->SimpleDeltaChange = $SimpleDeltaChange;

        return $new;
    }
}

