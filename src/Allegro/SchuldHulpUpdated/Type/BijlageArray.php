<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class BijlageArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBijlage>
     */
    private array $TBijlage;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBijlage>
     */
    public function getTBijlage(): array
    {
        return $this->TBijlage;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBijlage> $TBijlage
     * @return static
     */
    public function withTBijlage(array $TBijlage): static
    {
        $new = clone $this;
        $new->TBijlage = $TBijlage;

        return $new;
    }
}

