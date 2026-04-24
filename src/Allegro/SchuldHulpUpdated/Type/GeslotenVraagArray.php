<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class GeslotenVraagArray
{
    /**
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TGeslotenVraag>
     */
    private array $TGeslotenVraag;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TGeslotenVraag>
     */
    public function getTGeslotenVraag(): array
    {
        return $this->TGeslotenVraag;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TGeslotenVraag> $TGeslotenVraag
     * @return static
     */
    public function withTGeslotenVraag(array $TGeslotenVraag): static
    {
        $new = clone $this;
        $new->TGeslotenVraag = $TGeslotenVraag;

        return $new;
    }
}

