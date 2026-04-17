<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TBBoxTekstArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxTekst
     */
    private $TBBoxTekst;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxTekst
     */
    public function getTBBoxTekst()
    {
        return $this->TBBoxTekst;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TBBoxTekst $TBBoxTekst
     * @return TBBoxTekstArray
     */
    public function withTBBoxTekst($TBBoxTekst)
    {
        $new = clone $this;
        $new->TBBoxTekst = $TBBoxTekst;

        return $new;
    }
}

