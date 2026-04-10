<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class LijstKredietsoortArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TLijstKredietsoort
     */
    private $TLijstKredietsoort;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TLijstKredietsoort
     */
    public function getTLijstKredietsoort()
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TLijstKredietsoort $TLijstKredietsoort
     * @return LijstKredietsoortArray
     */
    public function withTLijstKredietsoort($TLijstKredietsoort)
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }
}

