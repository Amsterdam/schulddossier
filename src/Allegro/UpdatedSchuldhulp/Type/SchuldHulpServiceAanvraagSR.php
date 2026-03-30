<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceAanvraagSR implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAanvraagSR
     */
    private $aAanvraagSR;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAanvraagSR $aAanvraagSR
     */
    public function __construct($aAanvraagSR)
    {
        $this->aAanvraagSR = $aAanvraagSR;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAanvraagSR
     */
    public function getAAanvraagSR()
    {
        return $this->aAanvraagSR;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAanvraagSR $aAanvraagSR
     * @return SchuldHulpServiceAanvraagSR
     */
    public function withAAanvraagSR($aAanvraagSR)
    {
        $new = clone $this;
        $new->aAanvraagSR = $aAanvraagSR;

        return $new;
    }
}

