<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class AfspraakArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAfspraak
     */
    private $TAfspraak;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAfspraak
     */
    public function getTAfspraak()
    {
        return $this->TAfspraak;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAfspraak $TAfspraak
     * @return AfspraakArray
     */
    public function withTAfspraak($TAfspraak)
    {
        $new = clone $this;
        $new->TAfspraak = $TAfspraak;

        return $new;
    }
}

