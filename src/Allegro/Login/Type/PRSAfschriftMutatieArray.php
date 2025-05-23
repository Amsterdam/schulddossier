<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftMutatieArray implements RequestInterface
{

    /**
     * @var TPRSAfschriftMutatie
     */
    private $TPRSAfschriftMutatie;

    /**
     * Constructor
     *
     * @var TPRSAfschriftMutatie $TPRSAfschriftMutatie
     */
    public function __construct($TPRSAfschriftMutatie)
    {
        $this->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;
    }

    /**
     * @return TPRSAfschriftMutatie
     */
    public function getTPRSAfschriftMutatie()
    {
        return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param TPRSAfschriftMutatie $TPRSAfschriftMutatie
     * @return PRSAfschriftMutatieArray
     */
    public function withTPRSAfschriftMutatie($TPRSAfschriftMutatie)
    {
        $new = clone $this;
        $new->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;

        return $new;
    }


}

