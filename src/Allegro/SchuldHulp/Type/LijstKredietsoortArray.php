<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class LijstKredietsoortArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstKredietsoort
     */
    private $TLijstKredietsoort;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstKredietsoort
     */
    public function getTLijstKredietsoort()
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstKredietsoort $TLijstKredietsoort
     * @return LijstKredietsoortArray
     */
    public function withTLijstKredietsoort($TLijstKredietsoort)
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }
}

