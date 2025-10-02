<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSRVEisers implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader
     */
    private $aHeader;

    /**
     * Constructor
     *
     * @var TSRVAanvraagHeader $aHeader
     */
    public function __construct($aHeader)
    {
        $this->aHeader = $aHeader;
    }

    /**
     * @return TSRVAanvraagHeader
     */
    public function getAHeader()
    {
        return $this->aHeader;
    }

    /**
     * @param TSRVAanvraagHeader $aHeader
     * @return SchuldHulpServiceGetSRVEisers
     */
    public function withAHeader($aHeader)
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }


}

