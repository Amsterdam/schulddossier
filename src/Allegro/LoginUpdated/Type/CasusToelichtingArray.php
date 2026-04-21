<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class CasusToelichtingArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusToelichting
     */
    private $TCasusToelichting;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusToelichting
     */
    public function getTCasusToelichting()
    {
        return $this->TCasusToelichting;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusToelichting $TCasusToelichting
     * @return CasusToelichtingArray
     */
    public function withTCasusToelichting($TCasusToelichting)
    {
        $new = clone $this;
        $new->TCasusToelichting = $TCasusToelichting;

        return $new;
    }
}

