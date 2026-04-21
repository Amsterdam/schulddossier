<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class CasusPVAProductArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusPVAProduct
     */
    private $TCasusPVAProduct;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusPVAProduct
     */
    public function getTCasusPVAProduct()
    {
        return $this->TCasusPVAProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusPVAProduct $TCasusPVAProduct
     * @return CasusPVAProductArray
     */
    public function withTCasusPVAProduct($TCasusPVAProduct)
    {
        $new = clone $this;
        $new->TCasusPVAProduct = $TCasusPVAProduct;

        return $new;
    }
}
