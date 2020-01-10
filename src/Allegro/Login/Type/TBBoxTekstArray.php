<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxTekstArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekst
     */
    private $TBBoxTekst;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekst $TBBoxTekst
     */
    public function __construct($TBBoxTekst)
    {
        $this->TBBoxTekst = $TBBoxTekst;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekst
     */
    public function getTBBoxTekst()
    {
        return $this->TBBoxTekst;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekst $TBBoxTekst
     * @return TBBoxTekstArray
     */
    public function withTBBoxTekst($TBBoxTekst)
    {
        $new = clone $this;
        $new->TBBoxTekst = $TBBoxTekst;

        return $new;
    }


}

