<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class OpenVraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOpenVraag
     */
    private $TOpenVraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOpenVraag
     */
    public function getTOpenVraag()
    {
        return $this->TOpenVraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOpenVraag $TOpenVraag
     * @return OpenVraagArray
     */
    public function withTOpenVraag($TOpenVraag)
    {
        $new = clone $this;
        $new->TOpenVraag = $TOpenVraag;

        return $new;
    }
}

