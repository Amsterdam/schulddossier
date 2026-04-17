<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceBSNNaarRelatieMetBedrijf implements RequestInterface
{
    /**
     * @var int
     */
    private $BSN;

    /**
     * Constructor
     *
     * @param int $BSN
     */
    public function __construct($BSN)
    {
        $this->BSN = $BSN;
    }

    /**
     * @return int
     */
    public function getBSN()
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return LoginServiceBSNNaarRelatieMetBedrijf
     */
    public function withBSN($BSN)
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }
}

