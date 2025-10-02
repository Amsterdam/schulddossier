<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class LijstKredietsoortArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstKredietsoort>
     */
    private array $TLijstKredietsoort;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstKredietsoort>
     */
    public function getTLijstKredietsoort() : array
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstKredietsoort> $TLijstKredietsoort
     * @return static
     */
    public function withTLijstKredietsoort(array $TLijstKredietsoort) : static
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }
}

