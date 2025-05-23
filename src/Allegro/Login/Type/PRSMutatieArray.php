<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSMutatieArray implements RequestInterface
{

    /**
     * @var TPRSMutatie
     */
    private $TPRSMutatie;

    /**
     * Constructor
     *
     * @var TPRSMutatie $TPRSMutatie
     */
    public function __construct($TPRSMutatie)
    {
        $this->TPRSMutatie = $TPRSMutatie;
    }

    /**
     * @return TPRSMutatie
     */
    public function getTPRSMutatie()
    {
        return $this->TPRSMutatie;
    }

    /**
     * @param TPRSMutatie $TPRSMutatie
     * @return PRSMutatieArray
     */
    public function withTPRSMutatie($TPRSMutatie)
    {
        $new = clone $this;
        $new->TPRSMutatie = $TPRSMutatie;

        return $new;
    }


}

