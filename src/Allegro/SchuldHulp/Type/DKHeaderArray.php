<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DKHeaderArray implements RequestInterface
{

    /**
     * @var TDKHeader
     */
    private $TDKHeader;

    /**
     * Constructor
     *
     * @var TDKHeader $TDKHeader
     */
    public function __construct($TDKHeader)
    {
        $this->TDKHeader = $TDKHeader;
    }

    /**
     * @return TDKHeader
     */
    public function getTDKHeader()
    {
        return $this->TDKHeader;
    }

    /**
     * @param TDKHeader $TDKHeader
     * @return DKHeaderArray
     */
    public function withTDKHeader($TDKHeader)
    {
        $new = clone $this;
        $new->TDKHeader = $TDKHeader;

        return $new;
    }


}

