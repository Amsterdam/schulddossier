<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleRequestInfoArray implements RequestInterface
{

    /**
     * @var SimpleRequestInfo
     */
    private $SimpleRequestInfo;

    /**
     * Constructor
     *
     * @var SimpleRequestInfo $SimpleRequestInfo
     */
    public function __construct($SimpleRequestInfo)
    {
        $this->SimpleRequestInfo = $SimpleRequestInfo;
    }

    /**
     * @return SimpleRequestInfo
     */
    public function getSimpleRequestInfo()
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param SimpleRequestInfo $SimpleRequestInfo
     * @return SimpleRequestInfoArray
     */
    public function withSimpleRequestInfo($SimpleRequestInfo)
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }


}

