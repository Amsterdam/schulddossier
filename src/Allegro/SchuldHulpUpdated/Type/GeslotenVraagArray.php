<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class GeslotenVraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TGeslotenVraag
     */
    private $TGeslotenVraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TGeslotenVraag
     */
    public function getTGeslotenVraag()
    {
        return $this->TGeslotenVraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TGeslotenVraag $TGeslotenVraag
     * @return GeslotenVraagArray
     */
    public function withTGeslotenVraag($TGeslotenVraag)
    {
        $new = clone $this;
        $new->TGeslotenVraag = $TGeslotenVraag;

        return $new;
    }
}
