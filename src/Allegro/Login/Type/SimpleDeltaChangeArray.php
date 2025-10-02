<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleDeltaChangeArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChange>
     */
    private array $SimpleDeltaChange;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChange>
     */
    public function getSimpleDeltaChange() : array
    {
        return $this->SimpleDeltaChange;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChange> $SimpleDeltaChange
     * @return static
     */
    public function withSimpleDeltaChange(array $SimpleDeltaChange) : static
    {
        $new = clone $this;
        $new->SimpleDeltaChange = $SimpleDeltaChange;

        return $new;
    }
}

