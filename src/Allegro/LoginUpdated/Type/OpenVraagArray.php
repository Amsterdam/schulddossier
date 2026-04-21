<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class OpenVraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOpenVraag
     */
    private $TOpenVraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOpenVraag
     */
    public function getTOpenVraag()
    {
        return $this->TOpenVraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TOpenVraag $TOpenVraag
     * @return OpenVraagArray
     */
    public function withTOpenVraag($TOpenVraag)
    {
        $new = clone $this;
        $new->TOpenVraag = $TOpenVraag;

        return $new;
    }
}

