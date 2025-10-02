<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceGetSBEisers implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $aHeader;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $aHeader
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $aHeader)
    {
        $this->aHeader = $aHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader
     */
    public function getAHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader
    {
        return $this->aHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $aHeader
     * @return static
     */
    public function withAHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $aHeader) : static
    {
        $new = clone $this;
        $new->aHeader = $aHeader;

        return $new;
    }
}

