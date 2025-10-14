<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class AfspraakArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraak
     */
    private $TAfspraak;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraak
     */
    public function getTAfspraak()
    {
        return $this->TAfspraak;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraak $TAfspraak
     * @return AfspraakArray
     */
    public function withTAfspraak($TAfspraak)
    {
        $new = clone $this;
        $new->TAfspraak = $TAfspraak;

        return $new;
    }
}
