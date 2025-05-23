<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSRVAanvraag implements RequestInterface
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
     * @return SchuldHulpServiceGetSRVAanvraag
     */
    public function withAHeader($aHeader)
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }


}

