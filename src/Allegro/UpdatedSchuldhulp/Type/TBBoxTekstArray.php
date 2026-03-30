<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TBBoxTekstArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxTekst
     */
    private $TBBoxTekst;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxTekst
     */
    public function getTBBoxTekst()
    {
        return $this->TBBoxTekst;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TBBoxTekst $TBBoxTekst
     * @return TBBoxTekstArray
     */
    public function withTBBoxTekst($TBBoxTekst)
    {
        $new = clone $this;
        $new->TBBoxTekst = $TBBoxTekst;

        return $new;
    }
}

