<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class LijstKredietsoortArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstKredietsoort
     */
    private $TLijstKredietsoort;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstKredietsoort
     */
    public function getTLijstKredietsoort()
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstKredietsoort $TLijstKredietsoort
     * @return LijstKredietsoortArray
     */
    public function withTLijstKredietsoort($TLijstKredietsoort)
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }
}

