<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class GeslotenVraagArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGeslotenVraag>
     */
    private array $TGeslotenVraag;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGeslotenVraag>
     */
    public function getTGeslotenVraag() : array
    {
        return $this->TGeslotenVraag;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGeslotenVraag> $TGeslotenVraag
     * @return static
     */
    public function withTGeslotenVraag(array $TGeslotenVraag) : static
    {
        $new = clone $this;
        $new->TGeslotenVraag = $TGeslotenVraag;

        return $new;
    }
}

