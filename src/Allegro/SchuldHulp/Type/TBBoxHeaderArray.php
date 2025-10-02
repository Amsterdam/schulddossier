<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TBBoxHeaderArray implements RequestInterface
{

    /**
     * @var TBBoxHeader
     */
    private $TBBoxHeader;

    /**
     * Constructor
     *
     * @var TBBoxHeader $TBBoxHeader
     */
    public function __construct($TBBoxHeader)
    {
        $this->TBBoxHeader = $TBBoxHeader;
    }

    /**
     * @return TBBoxHeader
     */
    public function getTBBoxHeader()
    {
        return $this->TBBoxHeader;
    }

    /**
     * @param TBBoxHeader $TBBoxHeader
     * @return TBBoxHeaderArray
     */
    public function withTBBoxHeader($TBBoxHeader)
    {
        $new = clone $this;
        $new->TBBoxHeader = $TBBoxHeader;

        return $new;
    }


}

