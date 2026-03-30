<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSRVAanvraag implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVAanvraagHeader
     */
    private $aHeader;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVAanvraagHeader $aHeader
     */
    public function __construct($aHeader)
    {
        $this->aHeader = $aHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVAanvraagHeader
     */
    public function getAHeader()
    {
        return $this->aHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSRVAanvraagHeader $aHeader
     * @return SchuldHulpServiceGetSRVAanvraag
     */
    public function withAHeader($aHeader)
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }
}

