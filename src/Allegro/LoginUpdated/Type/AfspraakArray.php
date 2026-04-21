<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class AfspraakArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAfspraak
     */
    private $TAfspraak;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAfspraak
     */
    public function getTAfspraak()
    {
        return $this->TAfspraak;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAfspraak $TAfspraak
     * @return AfspraakArray
     */
    public function withTAfspraak($TAfspraak)
    {
        $new = clone $this;
        $new->TAfspraak = $TAfspraak;

        return $new;
    }
}

