<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SBEiserArray implements RequestInterface
{

    /**
     * @var TSBEiser
     */
    private $TSBEiser;

    /**
     * Constructor
     *
     * @var TSBEiser $TSBEiser
     */
    public function __construct($TSBEiser)
    {
        $this->TSBEiser = $TSBEiser;
    }

    /**
     * @return TSBEiser
     */
    public function getTSBEiser()
    {
        return $this->TSBEiser;
    }

    /**
     * @param TSBEiser $TSBEiser
     * @return SBEiserArray
     */
    public function withTSBEiser($TSBEiser)
    {
        $new = clone $this;
        $new->TSBEiser = $TSBEiser;

        return $new;
    }


}

