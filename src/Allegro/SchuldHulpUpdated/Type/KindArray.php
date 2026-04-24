<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class KindArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TKind>
     */
    private array $TKind;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TKind>
     */
    public function getTKind(): array
    {
        return $this->TKind;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TKind> $TKind
     * @return static
     */
    public function withTKind(array $TKind): static
    {
        $new = clone $this;
        $new->TKind = $TKind;

        return $new;
    }
}

