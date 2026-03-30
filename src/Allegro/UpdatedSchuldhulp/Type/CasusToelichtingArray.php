<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class CasusToelichtingArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusToelichting
     */
    private $TCasusToelichting;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusToelichting
     */
    public function getTCasusToelichting()
    {
        return $this->TCasusToelichting;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusToelichting $TCasusToelichting
     * @return CasusToelichtingArray
     */
    public function withTCasusToelichting($TCasusToelichting)
    {
        $new = clone $this;
        $new->TCasusToelichting = $TCasusToelichting;

        return $new;
    }
}

