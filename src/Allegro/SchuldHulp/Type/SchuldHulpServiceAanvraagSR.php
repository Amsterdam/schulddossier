<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceAanvraagSR implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR $aAanvraagSR;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR $aAanvraagSR
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR $aAanvraagSR)
    {
        $this->aAanvraagSR = $aAanvraagSR;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR
     */
    public function getAAanvraagSR() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR
    {
        return $this->aAanvraagSR;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR $aAanvraagSR
     * @return static
     */
    public function withAAanvraagSR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR $aAanvraagSR) : static
    {
        $new = clone $this;
        $new->aAanvraagSR = $aAanvraagSR;

        return $new;
    }
}

