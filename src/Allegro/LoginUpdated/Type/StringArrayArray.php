<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class StringArrayArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray>
     */
    private array $StringArray;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray>
     */
    public function getStringArray(): array
    {
        return $this->StringArray;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray> $StringArray
     * @return static
     */
    public function withStringArray(array $StringArray): static
    {
        $new = clone $this;
        $new->StringArray = $StringArray;

        return $new;
    }
}

