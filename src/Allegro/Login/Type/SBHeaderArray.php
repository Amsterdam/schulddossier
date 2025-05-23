<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SBHeaderArray implements RequestInterface
{

    /**
     * @var TSBHeader
     */
    private $TSBHeader;

    /**
     * Constructor
     *
     * @var TSBHeader $TSBHeader
     */
    public function __construct($TSBHeader)
    {
        $this->TSBHeader = $TSBHeader;
    }

    /**
     * @return TSBHeader
     */
    public function getTSBHeader()
    {
        return $this->TSBHeader;
    }

    /**
     * @param TSBHeader $TSBHeader
     * @return SBHeaderArray
     */
    public function withTSBHeader($TSBHeader)
    {
        $new = clone $this;
        $new->TSBHeader = $TSBHeader;

        return $new;
    }


}

