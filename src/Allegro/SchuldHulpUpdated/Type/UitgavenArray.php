<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class UitgavenArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TUitgaven>
     */
    private array $TUitgaven;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TUitgaven>
     */
    public function getTUitgaven(): array
    {
        return $this->TUitgaven;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TUitgaven> $TUitgaven
     * @return static
     */
    public function withTUitgaven(array $TUitgaven): static
    {
        $new = clone $this;
        $new->TUitgaven = $TUitgaven;

        return $new;
    }
}

