<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SchuldArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSchuld>
     */
    private array $TSchuld;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSchuld>
     */
    public function getTSchuld(): array
    {
        return $this->TSchuld;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSchuld> $TSchuld
     * @return static
     */
    public function withTSchuld(array $TSchuld): static
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }
}

