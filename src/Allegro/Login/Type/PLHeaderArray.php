<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PLHeaderArray implements RequestInterface
{

    /**
     * @var TPLHeader
     */
    private $TPLHeader;

    /**
     * Constructor
     *
     * @var TPLHeader $TPLHeader
     */
    public function __construct($TPLHeader)
    {
        $this->TPLHeader = $TPLHeader;
    }

    /**
     * @return TPLHeader
     */
    public function getTPLHeader()
    {
        return $this->TPLHeader;
    }

    /**
     * @param TPLHeader $TPLHeader
     * @return PLHeaderArray
     */
    public function withTPLHeader($TPLHeader)
    {
        $new = clone $this;
        $new->TPLHeader = $TPLHeader;

        return $new;
    }


}

