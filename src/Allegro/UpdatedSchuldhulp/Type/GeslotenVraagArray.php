<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class GeslotenVraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TGeslotenVraag
     */
    private $TGeslotenVraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TGeslotenVraag
     */
    public function getTGeslotenVraag()
    {
        return $this->TGeslotenVraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TGeslotenVraag $TGeslotenVraag
     * @return GeslotenVraagArray
     */
    public function withTGeslotenVraag($TGeslotenVraag)
    {
        $new = clone $this;
        $new->TGeslotenVraag = $TGeslotenVraag;

        return $new;
    }
}

