<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSBEisers implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $aHeader;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $aHeader
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $aHeader)
    {
        $this->aHeader = $aHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader
     */
    public function getAHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader
    {
        return $this->aHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $aHeader
     * @return static
     */
    public function withAHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $aHeader) : static
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }
}

