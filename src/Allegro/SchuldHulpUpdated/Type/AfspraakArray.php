<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class AfspraakArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraak
     */
    private $TAfspraak;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraak
     */
    public function getTAfspraak()
    {
        return $this->TAfspraak;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraak $TAfspraak
     * @return AfspraakArray
     */
    public function withTAfspraak($TAfspraak)
    {
        $new = clone $this;
        $new->TAfspraak = $TAfspraak;

        return $new;
    }
}
