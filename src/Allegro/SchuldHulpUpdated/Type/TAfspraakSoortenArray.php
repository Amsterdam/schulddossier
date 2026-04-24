<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TAfspraakSoortenArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraakSoorten>
     */
    private array $TAfspraakSoorten;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraakSoorten>
     */
    public function getTAfspraakSoorten(): array
    {
        return $this->TAfspraakSoorten;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAfspraakSoorten> $TAfspraakSoorten
     * @return static
     */
    public function withTAfspraakSoorten(array $TAfspraakSoorten): static
    {
        $new = clone $this;
        $new->TAfspraakSoorten = $TAfspraakSoorten;

        return $new;
    }
}

