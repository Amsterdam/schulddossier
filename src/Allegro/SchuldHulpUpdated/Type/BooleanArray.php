<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class BooleanArray
{
    /**
     * @var non-empty-array<int<0,max>, bool>
     */
    private array $boolean;

    /**
     * @return non-empty-array<int<0,max>, bool>
     */
    public function getBoolean(): array
    {
        return $this->boolean;
    }

    /**
     * @param non-empty-array<int<0,max>, bool> $boolean
     * @return static
     */
    public function withBoolean(array $boolean): static
    {
        $new = clone $this;
        $new->boolean = $boolean;

        return $new;
    }
}

