<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class PLAanvraagArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPLAanvraag>
     */
    private array $TPLAanvraag;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPLAanvraag>
     */
    public function getTPLAanvraag() : array
    {
        return $this->TPLAanvraag;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPLAanvraag> $TPLAanvraag
     * @return static
     */
    public function withTPLAanvraag(array $TPLAanvraag) : static
    {
        $new = clone $this;
        $new->TPLAanvraag = $TPLAanvraag;

        return $new;
    }
}

