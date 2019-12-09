<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BBRHeaderArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRHeader
     */
    private $TBBRHeader;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRHeader $TBBRHeader
     */
    public function __construct($TBBRHeader)
    {
        $this->TBBRHeader = $TBBRHeader;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRHeader
     */
    public function getTBBRHeader()
    {
        return $this->TBBRHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRHeader $TBBRHeader
     * @return BBRHeaderArray
     */
    public function withTBBRHeader($TBBRHeader)
    {
        $new = clone $this;
        $new->TBBRHeader = $TBBRHeader;

        return $new;
    }


}

