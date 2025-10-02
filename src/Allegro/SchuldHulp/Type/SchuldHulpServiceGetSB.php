<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSB implements RequestInterface
{

    /**
     * @var TSBHeader
     */
    private $aHeader;

    /**
     * Constructor
     *
     * @var TSBHeader $aHeader
     */
    public function __construct($aHeader)
    {
        $this->aHeader = $aHeader;
    }

    /**
     * @return TSBHeader
     */
    public function getAHeader()
    {
        return $this->aHeader;
    }

    /**
     * @param TSBHeader $aHeader
     * @return SchuldHulpServiceGetSB
     */
    public function withAHeader($aHeader)
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }


}

