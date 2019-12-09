<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleRequestInfoArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfo
     */
    private $SimpleRequestInfo;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfo $SimpleRequestInfo
     */
    public function __construct($SimpleRequestInfo)
    {
        $this->SimpleRequestInfo = $SimpleRequestInfo;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfo
     */
    public function getSimpleRequestInfo()
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfo $SimpleRequestInfo
     * @return SimpleRequestInfoArray
     */
    public function withSimpleRequestInfo($SimpleRequestInfo)
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }


}

