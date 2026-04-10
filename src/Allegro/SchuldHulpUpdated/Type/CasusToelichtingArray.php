<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class CasusToelichtingArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusToelichting
     */
    private $TCasusToelichting;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusToelichting
     */
    public function getTCasusToelichting()
    {
        return $this->TCasusToelichting;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusToelichting $TCasusToelichting
     * @return CasusToelichtingArray
     */
    public function withTCasusToelichting($TCasusToelichting)
    {
        $new = clone $this;
        $new->TCasusToelichting = $TCasusToelichting;

        return $new;
    }
}

