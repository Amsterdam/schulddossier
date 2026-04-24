<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TAfspraakSoortenArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAfspraakSoorten>
     */
    private array $TAfspraakSoorten;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAfspraakSoorten>
     */
    public function getTAfspraakSoorten(): array
    {
        return $this->TAfspraakSoorten;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAfspraakSoorten> $TAfspraakSoorten
     * @return static
     */
    public function withTAfspraakSoorten(array $TAfspraakSoorten): static
    {
        $new = clone $this;
        $new->TAfspraakSoorten = $TAfspraakSoorten;

        return $new;
    }
}

