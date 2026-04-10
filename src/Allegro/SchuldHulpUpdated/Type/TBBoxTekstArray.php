<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TBBoxTekstArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxTekst
     */
    private $TBBoxTekst;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxTekst
     */
    public function getTBBoxTekst()
    {
        return $this->TBBoxTekst;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBoxTekst $TBBoxTekst
     * @return TBBoxTekstArray
     */
    public function withTBBoxTekst($TBBoxTekst)
    {
        $new = clone $this;
        $new->TBBoxTekst = $TBBoxTekst;

        return $new;
    }
}

