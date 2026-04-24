<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class LijstKredietsoortArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstKredietsoort>
     */
    private array $TLijstKredietsoort;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstKredietsoort>
     */
    public function getTLijstKredietsoort(): array
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstKredietsoort> $TLijstKredietsoort
     * @return static
     */
    public function withTLijstKredietsoort(array $TLijstKredietsoort): static
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }
}

