<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class FooterArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TFooter>
     */
    private array $TFooter;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TFooter>
     */
    public function getTFooter(): array
    {
        return $this->TFooter;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TFooter> $TFooter
     * @return static
     */
    public function withTFooter(array $TFooter): static
    {
        $new = clone $this;
        $new->TFooter = $TFooter;

        return $new;
    }
}

