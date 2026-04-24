<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PandenArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPand>
     */
    private array $TPand;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPand>
     */
    public function getTPand(): array
    {
        return $this->TPand;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPand> $TPand
     * @return static
     */
    public function withTPand(array $TPand): static
    {
        $new = clone $this;
        $new->TPand = $TPand;

        return $new;
    }
}

