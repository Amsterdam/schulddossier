<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SimpleDeltaChangeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDeltaChange
     */
    private $SimpleDeltaChange;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDeltaChange
     */
    public function getSimpleDeltaChange()
    {
        return $this->SimpleDeltaChange;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleDeltaChange $SimpleDeltaChange
     * @return SimpleDeltaChangeArray
     */
    public function withSimpleDeltaChange($SimpleDeltaChange)
    {
        $new = clone $this;
        $new->SimpleDeltaChange = $SimpleDeltaChange;

        return $new;
    }
}

