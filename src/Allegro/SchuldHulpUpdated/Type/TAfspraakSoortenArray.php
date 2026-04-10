<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TAfspraakSoortenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAfspraakSoorten
     */
    private $TAfspraakSoorten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAfspraakSoorten
     */
    public function getTAfspraakSoorten()
    {
        return $this->TAfspraakSoorten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAfspraakSoorten $TAfspraakSoorten
     * @return TAfspraakSoortenArray
     */
    public function withTAfspraakSoorten($TAfspraakSoorten)
    {
        $new = clone $this;
        $new->TAfspraakSoorten = $TAfspraakSoorten;

        return $new;
    }
}

