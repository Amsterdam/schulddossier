<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class Int64Array
{
    /**
     * @var non-empty-array<int<0,max>, int>
     */
    private array $long;

    /**
     * @return non-empty-array<int<0,max>, int>
     */
    public function getLong(): array
    {
        return $this->long;
    }

    /**
     * @param non-empty-array<int<0,max>, int> $long
     * @return static
     */
    public function withLong(array $long): static
    {
        $new = clone $this;
        $new->long = $long;

        return $new;
    }
}

