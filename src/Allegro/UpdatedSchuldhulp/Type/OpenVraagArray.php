<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class OpenVraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TOpenVraag
     */
    private $TOpenVraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TOpenVraag
     */
    public function getTOpenVraag()
    {
        return $this->TOpenVraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TOpenVraag $TOpenVraag
     * @return OpenVraagArray
     */
    public function withTOpenVraag($TOpenVraag)
    {
        $new = clone $this;
        $new->TOpenVraag = $TOpenVraag;

        return $new;
    }
}

