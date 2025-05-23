<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LijstOpdrachtgeverArray implements RequestInterface
{

    /**
     * @var TLijstOpdrachtgever
     */
    private $TLijstOpdrachtgever;

    /**
     * Constructor
     *
     * @var TLijstOpdrachtgever $TLijstOpdrachtgever
     */
    public function __construct($TLijstOpdrachtgever)
    {
        $this->TLijstOpdrachtgever = $TLijstOpdrachtgever;
    }

    /**
     * @return TLijstOpdrachtgever
     */
    public function getTLijstOpdrachtgever()
    {
        return $this->TLijstOpdrachtgever;
    }

    /**
     * @param TLijstOpdrachtgever $TLijstOpdrachtgever
     * @return LijstOpdrachtgeverArray
     */
    public function withTLijstOpdrachtgever($TLijstOpdrachtgever)
    {
        $new = clone $this;
        $new->TLijstOpdrachtgever = $TLijstOpdrachtgever;

        return $new;
    }


}

