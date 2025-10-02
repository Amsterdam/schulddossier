<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class OpdrachtgeverKlantArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpdrachtgeverKlant>
     */
    private array $TOpdrachtgeverKlant;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpdrachtgeverKlant>
     */
    public function getTOpdrachtgeverKlant() : array
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpdrachtgeverKlant> $TOpdrachtgeverKlant
     * @return static
     */
    public function withTOpdrachtgeverKlant(array $TOpdrachtgeverKlant) : static
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }
}

