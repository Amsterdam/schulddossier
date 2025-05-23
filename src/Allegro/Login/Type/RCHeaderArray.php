<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RCHeaderArray implements RequestInterface
{

    /**
     * @var TRCHeader
     */
    private $TRCHeader;

    /**
     * Constructor
     *
     * @var TRCHeader $TRCHeader
     */
    public function __construct($TRCHeader)
    {
        $this->TRCHeader = $TRCHeader;
    }

    /**
     * @return TRCHeader
     */
    public function getTRCHeader()
    {
        return $this->TRCHeader;
    }

    /**
     * @param TRCHeader $TRCHeader
     * @return RCHeaderArray
     */
    public function withTRCHeader($TRCHeader)
    {
        $new = clone $this;
        $new->TRCHeader = $TRCHeader;

        return $new;
    }


}

