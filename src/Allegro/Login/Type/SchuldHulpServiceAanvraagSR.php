<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceAanvraagSR implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagSR
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagSR $aAanvraagSR;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagSR $aAanvraagSR
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagSR $aAanvraagSR)
    {
        $this->aAanvraagSR = $aAanvraagSR;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagSR
     */
    public function getAAanvraagSR() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagSR
    {
        return $this->aAanvraagSR;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagSR $aAanvraagSR
     * @return static
     */
    public function withAAanvraagSR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagSR $aAanvraagSR) : static
    {
        $new = clone $this;
        $new->aAanvraagSR = $aAanvraagSR;

        return $new;
    }
}

