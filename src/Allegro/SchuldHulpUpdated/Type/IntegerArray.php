<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class IntegerArray
{
    /**
     * @var non-empty-array<int<0,max>, int>
     */
    private array $int;

    /**
     * @return non-empty-array<int<0,max>, int>
     */
    public function getInt(): array
    {
        return $this->int;
    }

    /**
     * @param non-empty-array<int<0,max>, int> $int
     * @return static
     */
    public function withInt(array $int): static
    {
        $new = clone $this;
        $new->int = $int;

        return $new;
    }
}

