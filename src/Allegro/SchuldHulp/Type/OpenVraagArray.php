<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class OpenVraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpenVraag
     */
    private $TOpenVraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpenVraag
     */
    public function getTOpenVraag()
    {
        return $this->TOpenVraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpenVraag $TOpenVraag
     * @return OpenVraagArray
     */
    public function withTOpenVraag($TOpenVraag)
    {
        $new = clone $this;
        $new->TOpenVraag = $TOpenVraag;

        return $new;
    }
}

