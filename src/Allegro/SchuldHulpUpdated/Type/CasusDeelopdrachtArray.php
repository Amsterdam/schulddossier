<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class CasusDeelopdrachtArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusDeelopdracht>
     */
    private array $TCasusDeelopdracht;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusDeelopdracht>
     */
    public function getTCasusDeelopdracht(): array
    {
        return $this->TCasusDeelopdracht;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusDeelopdracht> $TCasusDeelopdracht
     * @return static
     */
    public function withTCasusDeelopdracht(array $TCasusDeelopdracht): static
    {
        $new = clone $this;
        $new->TCasusDeelopdracht = $TCasusDeelopdracht;

        return $new;
    }
}

