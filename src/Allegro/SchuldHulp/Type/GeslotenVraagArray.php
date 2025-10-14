<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class GeslotenVraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGeslotenVraag
     */
    private $TGeslotenVraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGeslotenVraag
     */
    public function getTGeslotenVraag()
    {
        return $this->TGeslotenVraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGeslotenVraag $TGeslotenVraag
     * @return GeslotenVraagArray
     */
    public function withTGeslotenVraag($TGeslotenVraag)
    {
        $new = clone $this;
        $new->TGeslotenVraag = $TGeslotenVraag;

        return $new;
    }
}

