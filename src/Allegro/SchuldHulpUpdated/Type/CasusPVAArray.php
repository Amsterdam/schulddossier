<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class CasusPVAArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusPVA
     */
    private $TCasusPVA;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusPVA
     */
    public function getTCasusPVA()
    {
        return $this->TCasusPVA;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusPVA $TCasusPVA
     * @return CasusPVAArray
     */
    public function withTCasusPVA($TCasusPVA)
    {
        $new = clone $this;
        $new->TCasusPVA = $TCasusPVA;

        return $new;
    }
}

