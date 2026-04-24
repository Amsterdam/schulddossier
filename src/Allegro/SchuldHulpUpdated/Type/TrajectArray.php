<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TrajectArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTraject>
     */
    private array $TTraject;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTraject>
     */
    public function getTTraject(): array
    {
        return $this->TTraject;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTraject> $TTraject
     * @return static
     */
    public function withTTraject(array $TTraject): static
    {
        $new = clone $this;
        $new->TTraject = $TTraject;

        return $new;
    }
}

