<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceBSNNaarRelatie implements RequestInterface
{

    /**
     * @var int
     */
    private $BSN;

    /**
     * Constructor
     *
     * @var int $BSN
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
     * @return LoginServiceBSNNaarRelatie
     */
    public function withBSN($BSN)
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }


}

