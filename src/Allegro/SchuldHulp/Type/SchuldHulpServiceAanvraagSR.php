<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceAanvraagSR implements RequestInterface
{

    /**
     * @var TAanvraagSR
     */
    private $aAanvraagSR;

    /**
     * Constructor
     *
     * @var TAanvraagSR $aAanvraagSR
     */
    public function __construct($aAanvraagSR)
    {
        $this->aAanvraagSR = $aAanvraagSR;
    }

    /**
     * @return TAanvraagSR
     */
    public function getAAanvraagSR()
    {
        return $this->aAanvraagSR;
    }

    /**
     * @param TAanvraagSR $aAanvraagSR
     * @return SchuldHulpServiceAanvraagSR
     */
    public function withAAanvraagSR($aAanvraagSR)
    {
        $new = clone $this;
        $new->aAanvraagSR = $aAanvraagSR;

        return $new;
    }


}

