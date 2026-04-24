<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class LijstOpdrachtgeverArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstOpdrachtgever>
     */
    private array $TLijstOpdrachtgever;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstOpdrachtgever>
     */
    public function getTLijstOpdrachtgever(): array
    {
        return $this->TLijstOpdrachtgever;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TLijstOpdrachtgever> $TLijstOpdrachtgever
     * @return static
     */
    public function withTLijstOpdrachtgever(array $TLijstOpdrachtgever): static
    {
        $new = clone $this;
        $new->TLijstOpdrachtgever = $TLijstOpdrachtgever;

        return $new;
    }
}

