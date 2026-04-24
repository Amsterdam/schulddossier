<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SchuldArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSchuld>
     */
    private array $TSchuld;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSchuld>
     */
    public function getTSchuld(): array
    {
        return $this->TSchuld;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSchuld> $TSchuld
     * @return static
     */
    public function withTSchuld(array $TSchuld): static
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }
}

