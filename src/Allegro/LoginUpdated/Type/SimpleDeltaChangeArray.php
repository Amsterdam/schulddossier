<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SimpleDeltaChangeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChange
     */
    private $SimpleDeltaChange;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChange
     */
    public function getSimpleDeltaChange()
    {
        return $this->SimpleDeltaChange;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleDeltaChange $SimpleDeltaChange
     * @return SimpleDeltaChangeArray
     */
    public function withSimpleDeltaChange($SimpleDeltaChange)
    {
        $new = clone $this;
        $new->SimpleDeltaChange = $SimpleDeltaChange;

        return $new;
    }
}

