<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSRVAanvraag implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader $aHeader;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader $aHeader
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader $aHeader)
    {
        $this->aHeader = $aHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader
     */
    public function getAHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader
    {
        return $this->aHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader $aHeader
     * @return static
     */
    public function withAHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader $aHeader) : static
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }
}

