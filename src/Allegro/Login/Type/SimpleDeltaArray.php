<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleDeltaArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDelta>
     */
    private array $SimpleDelta;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDelta>
     */
    public function getSimpleDelta() : array
    {
        return $this->SimpleDelta;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDelta> $SimpleDelta
     * @return static
     */
    public function withSimpleDelta(array $SimpleDelta) : static
    {
        $new = clone $this;
        $new->SimpleDelta = $SimpleDelta;

        return $new;
    }
}

