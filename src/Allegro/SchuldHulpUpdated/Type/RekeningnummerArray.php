<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class RekeningnummerArray
{
    /**
     * @var non-empty-array<int<0,max>, string>
     */
    private array $string;

    /**
     * @return non-empty-array<int<0,max>, string>
     */
    public function getString(): array
    {
        return $this->string;
    }

    /**
     * @param non-empty-array<int<0,max>, string> $string
     * @return static
     */
    public function withString(array $string): static
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}

