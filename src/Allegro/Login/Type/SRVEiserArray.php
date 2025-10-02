<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SRVEiserArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEiser>
     */
    private array $TSRVEiser;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEiser>
     */
    public function getTSRVEiser() : array
    {
        return $this->TSRVEiser;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEiser> $TSRVEiser
     * @return static
     */
    public function withTSRVEiser(array $TSRVEiser) : static
    {
        $new = clone $this;
        $new->TSRVEiser = $TSRVEiser;

        return $new;
    }
}

