<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class LijstOpdrachtgeverArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TLijstOpdrachtgever>
     */
    private array $TLijstOpdrachtgever;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TLijstOpdrachtgever>
     */
    public function getTLijstOpdrachtgever(): array
    {
        return $this->TLijstOpdrachtgever;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TLijstOpdrachtgever> $TLijstOpdrachtgever
     * @return static
     */
    public function withTLijstOpdrachtgever(array $TLijstOpdrachtgever): static
    {
        $new = clone $this;
        $new->TLijstOpdrachtgever = $TLijstOpdrachtgever;

        return $new;
    }
}

