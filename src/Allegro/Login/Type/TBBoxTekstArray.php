<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxTekstArray implements RequestInterface
{

    /**
     * @var TBBoxTekst
     */
    private $TBBoxTekst;

    /**
     * Constructor
     *
     * @var TBBoxTekst $TBBoxTekst
     */
    public function __construct($TBBoxTekst)
    {
        $this->TBBoxTekst = $TBBoxTekst;
    }

    /**
     * @return TBBoxTekst
     */
    public function getTBBoxTekst()
    {
        return $this->TBBoxTekst;
    }

    /**
     * @param TBBoxTekst $TBBoxTekst
     * @return TBBoxTekstArray
     */
    public function withTBBoxTekst($TBBoxTekst)
    {
        $new = clone $this;
        $new->TBBoxTekst = $TBBoxTekst;

        return $new;
    }


}

