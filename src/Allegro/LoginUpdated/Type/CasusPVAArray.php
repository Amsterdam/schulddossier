<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class CasusPVAArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusPVA
     */
    private $TCasusPVA;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusPVA
     */
    public function getTCasusPVA()
    {
        return $this->TCasusPVA;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusPVA $TCasusPVA
     * @return CasusPVAArray
     */
    public function withTCasusPVA($TCasusPVA)
    {
        $new = clone $this;
        $new->TCasusPVA = $TCasusPVA;

        return $new;
    }
}
