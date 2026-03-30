<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class CasusPVAArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusPVA
     */
    private $TCasusPVA;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusPVA
     */
    public function getTCasusPVA()
    {
        return $this->TCasusPVA;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusPVA $TCasusPVA
     * @return CasusPVAArray
     */
    public function withTCasusPVA($TCasusPVA)
    {
        $new = clone $this;
        $new->TCasusPVA = $TCasusPVA;

        return $new;
    }
}

