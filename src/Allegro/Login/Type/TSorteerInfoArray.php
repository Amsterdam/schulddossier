<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSorteerInfoArray implements RequestInterface
{

    /**
     * @var TSorteerInfo
     */
    private $TSorteerInfo;

    /**
     * Constructor
     *
     * @var TSorteerInfo $TSorteerInfo
     */
    public function __construct($TSorteerInfo)
    {
        $this->TSorteerInfo = $TSorteerInfo;
    }

    /**
     * @return TSorteerInfo
     */
    public function getTSorteerInfo()
    {
        return $this->TSorteerInfo;
    }

    /**
     * @param TSorteerInfo $TSorteerInfo
     * @return TSorteerInfoArray
     */
    public function withTSorteerInfo($TSorteerInfo)
    {
        $new = clone $this;
        $new->TSorteerInfo = $TSorteerInfo;

        return $new;
    }


}

