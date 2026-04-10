<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TAfspraakSoortenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAfspraakSoorten
     */
    private $TAfspraakSoorten;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAfspraakSoorten
     */
    public function getTAfspraakSoorten()
    {
        return $this->TAfspraakSoorten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAfspraakSoorten $TAfspraakSoorten
     * @return TAfspraakSoortenArray
     */
    public function withTAfspraakSoorten($TAfspraakSoorten)
    {
        $new = clone $this;
        $new->TAfspraakSoorten = $TAfspraakSoorten;

        return $new;
    }
}

