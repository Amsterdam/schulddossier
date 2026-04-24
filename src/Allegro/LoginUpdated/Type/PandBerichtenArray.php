<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PandBerichtenArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPandBericht>
     */
    private array $TPandBericht;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPandBericht>
     */
    public function getTPandBericht(): array
    {
        return $this->TPandBericht;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPandBericht> $TPandBericht
     * @return static
     */
    public function withTPandBericht(array $TPandBericht): static
    {
        $new = clone $this;
        $new->TPandBericht = $TPandBericht;

        return $new;
    }
}

