<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TBBoxGeadresseerdeArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxGeadresseerde>
     */
    private array $TBBoxGeadresseerde;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxGeadresseerde>
     */
    public function getTBBoxGeadresseerde(): array
    {
        return $this->TBBoxGeadresseerde;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBoxGeadresseerde> $TBBoxGeadresseerde
     * @return static
     */
    public function withTBBoxGeadresseerde(array $TBBoxGeadresseerde): static
    {
        $new = clone $this;
        $new->TBBoxGeadresseerde = $TBBoxGeadresseerde;

        return $new;
    }
}

