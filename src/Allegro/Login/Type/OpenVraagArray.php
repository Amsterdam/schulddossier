<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class OpenVraagArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag>
     */
    private array $TOpenVraag;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag>
     */
    public function getTOpenVraag() : array
    {
        return $this->TOpenVraag;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag> $TOpenVraag
     * @return static
     */
    public function withTOpenVraag(array $TOpenVraag) : static
    {
        $new = clone $this;
        $new->TOpenVraag = $TOpenVraag;

        return $new;
    }
}

