<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class CasusPVAArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusPVA
     */
    private $TCasusPVA;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusPVA
     */
    public function getTCasusPVA()
    {
        return $this->TCasusPVA;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusPVA $TCasusPVA
     * @return CasusPVAArray
     */
    public function withTCasusPVA($TCasusPVA)
    {
        $new = clone $this;
        $new->TCasusPVA = $TCasusPVA;

        return $new;
    }
}

