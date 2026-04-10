<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class AfspraakArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAfspraak
     */
    private $TAfspraak;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAfspraak
     */
    public function getTAfspraak()
    {
        return $this->TAfspraak;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAfspraak $TAfspraak
     * @return AfspraakArray
     */
    public function withTAfspraak($TAfspraak)
    {
        $new = clone $this;
        $new->TAfspraak = $TAfspraak;

        return $new;
    }
}

