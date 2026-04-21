<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SRVEiserArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEiser
     */
    private $TSRVEiser;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEiser $TSRVEiser
     */
    public function __construct($TSRVEiser)
    {
        $this->TSRVEiser = $TSRVEiser;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEiser
     */
    public function getTSRVEiser()
    {
        return $this->TSRVEiser;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEiser $TSRVEiser
     * @return SRVEiserArray
     */
    public function withTSRVEiser($TSRVEiser)
    {
        $new = clone $this;
        $new->TSRVEiser = $TSRVEiser;

        return $new;
    }
}
