<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PRSAfschriftMutatieArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutatie
     */
    private $TPRSAfschriftMutatie;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutatie $TPRSAfschriftMutatie
     */
    public function __construct($TPRSAfschriftMutatie)
    {
        $this->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutatie
     */
    public function getTPRSAfschriftMutatie()
    {
        return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutatie $TPRSAfschriftMutatie
     * @return PRSAfschriftMutatieArray
     */
    public function withTPRSAfschriftMutatie($TPRSAfschriftMutatie)
    {
        $new = clone $this;
        $new->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;

        return $new;
    }
}
