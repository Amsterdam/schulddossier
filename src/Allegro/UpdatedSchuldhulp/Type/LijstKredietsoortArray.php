<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class LijstKredietsoortArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TLijstKredietsoort
     */
    private $TLijstKredietsoort;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TLijstKredietsoort
     */
    public function getTLijstKredietsoort()
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TLijstKredietsoort $TLijstKredietsoort
     * @return LijstKredietsoortArray
     */
    public function withTLijstKredietsoort($TLijstKredietsoort)
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }
}

