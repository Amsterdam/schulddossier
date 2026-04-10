<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class GeslotenVraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TGeslotenVraag
     */
    private $TGeslotenVraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TGeslotenVraag
     */
    public function getTGeslotenVraag()
    {
        return $this->TGeslotenVraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TGeslotenVraag $TGeslotenVraag
     * @return GeslotenVraagArray
     */
    public function withTGeslotenVraag($TGeslotenVraag)
    {
        $new = clone $this;
        $new->TGeslotenVraag = $TGeslotenVraag;

        return $new;
    }
}

