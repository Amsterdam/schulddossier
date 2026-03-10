<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SBHeaderArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader
     */
    private $TSBHeader;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $TSBHeader
     */
    public function __construct($TSBHeader)
    {
        $this->TSBHeader = $TSBHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader
     */
    public function getTSBHeader()
    {
        return $this->TSBHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $TSBHeader
     * @return SBHeaderArray
     */
    public function withTSBHeader($TSBHeader)
    {
        $new = clone $this;
        $new->TSBHeader = $TSBHeader;

        return $new;
    }
}
