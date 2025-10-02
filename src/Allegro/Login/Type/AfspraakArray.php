<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class AfspraakArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAfspraak>
     */
    private array $TAfspraak;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAfspraak>
     */
    public function getTAfspraak() : array
    {
        return $this->TAfspraak;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAfspraak> $TAfspraak
     * @return static
     */
    public function withTAfspraak(array $TAfspraak) : static
    {
        $new = clone $this;
        $new->TAfspraak = $TAfspraak;

        return $new;
    }
}

