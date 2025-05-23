<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class BBRHeaderArray implements RequestInterface
{

    /**
     * @var TBBRHeader
     */
    private $TBBRHeader;

    /**
     * Constructor
     *
     * @var TBBRHeader $TBBRHeader
     */
    public function __construct($TBBRHeader)
    {
        $this->TBBRHeader = $TBBRHeader;
    }

    /**
     * @return TBBRHeader
     */
    public function getTBBRHeader()
    {
        return $this->TBBRHeader;
    }

    /**
     * @param TBBRHeader $TBBRHeader
     * @return BBRHeaderArray
     */
    public function withTBBRHeader($TBBRHeader)
    {
        $new = clone $this;
        $new->TBBRHeader = $TBBRHeader;

        return $new;
    }


}

