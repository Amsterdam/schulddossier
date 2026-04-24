<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class OpdrachtgeverKlantArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOpdrachtgeverKlant>
     */
    private array $TOpdrachtgeverKlant;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOpdrachtgeverKlant>
     */
    public function getTOpdrachtgeverKlant(): array
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOpdrachtgeverKlant> $TOpdrachtgeverKlant
     * @return static
     */
    public function withTOpdrachtgeverKlant(array $TOpdrachtgeverKlant): static
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }
}

