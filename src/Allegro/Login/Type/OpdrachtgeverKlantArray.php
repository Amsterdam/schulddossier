<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OpdrachtgeverKlantArray implements RequestInterface
{

    /**
     * @var TOpdrachtgeverKlant
     */
    private $TOpdrachtgeverKlant;

    /**
     * Constructor
     *
     * @var TOpdrachtgeverKlant $TOpdrachtgeverKlant
     */
    public function __construct($TOpdrachtgeverKlant)
    {
        $this->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;
    }

    /**
     * @return TOpdrachtgeverKlant
     */
    public function getTOpdrachtgeverKlant()
    {
        return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param TOpdrachtgeverKlant $TOpdrachtgeverKlant
     * @return OpdrachtgeverKlantArray
     */
    public function withTOpdrachtgeverKlant($TOpdrachtgeverKlant)
    {
        $new = clone $this;
        $new->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;

        return $new;
    }


}

