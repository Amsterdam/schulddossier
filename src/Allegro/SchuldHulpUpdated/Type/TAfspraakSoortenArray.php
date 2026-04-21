<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TAfspraakSoortenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraakSoorten
     */
    private $TAfspraakSoorten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraakSoorten
     */
    public function getTAfspraakSoorten()
    {
        return $this->TAfspraakSoorten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraakSoorten $TAfspraakSoorten
     * @return TAfspraakSoortenArray
     */
    public function withTAfspraakSoorten($TAfspraakSoorten)
    {
        $new = clone $this;
        $new->TAfspraakSoorten = $TAfspraakSoorten;

        return $new;
    }
}
