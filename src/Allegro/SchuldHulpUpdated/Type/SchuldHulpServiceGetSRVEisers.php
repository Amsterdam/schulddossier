<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSRVEisers implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraagHeader
     */
    private $aHeader;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraagHeader $aHeader
     */
    public function __construct($aHeader)
    {
        $this->aHeader = $aHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraagHeader
     */
    public function getAHeader()
    {
        return $this->aHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraagHeader $aHeader
     * @return SchuldHulpServiceGetSRVEisers
     */
    public function withAHeader($aHeader)
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }
}

