<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SBEiserArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEiser>
     */
    private array $TSBEiser;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEiser>
     */
    public function getTSBEiser() : array
    {
        return $this->TSBEiser;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEiser> $TSBEiser
     * @return static
     */
    public function withTSBEiser(array $TSBEiser) : static
    {
        $new = clone $this;
        $new->TSBEiser = $TSBEiser;

        return $new;
    }
}

