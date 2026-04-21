<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class CasusToelichtingArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusToelichting
     */
    private $TCasusToelichting;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusToelichting
     */
    public function getTCasusToelichting()
    {
        return $this->TCasusToelichting;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusToelichting $TCasusToelichting
     * @return CasusToelichtingArray
     */
    public function withTCasusToelichting($TCasusToelichting)
    {
        $new = clone $this;
        $new->TCasusToelichting = $TCasusToelichting;

        return $new;
    }
}
