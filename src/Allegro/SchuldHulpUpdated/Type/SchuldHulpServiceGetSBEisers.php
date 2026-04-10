<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSBEisers implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBHeader
     */
    private $aHeader;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBHeader $aHeader
     */
    public function __construct($aHeader)
    {
        $this->aHeader = $aHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBHeader
     */
    public function getAHeader()
    {
        return $this->aHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSBHeader $aHeader
     * @return SchuldHulpServiceGetSBEisers
     */
    public function withAHeader($aHeader)
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }
}

