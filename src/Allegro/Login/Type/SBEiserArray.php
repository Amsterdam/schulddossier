<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SBEiserArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEiser
     */
    private $TSBEiser;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEiser $TSBEiser
     */
    public function __construct($TSBEiser)
    {
        $this->TSBEiser = $TSBEiser;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEiser
     */
    public function getTSBEiser()
    {
        return $this->TSBEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEiser $TSBEiser
     * @return SBEiserArray
     */
    public function withTSBEiser($TSBEiser)
    {
        $new = clone $this;
        $new->TSBEiser = $TSBEiser;

        return $new;
    }


}

