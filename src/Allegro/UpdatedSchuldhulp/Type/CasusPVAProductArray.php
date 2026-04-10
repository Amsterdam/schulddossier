<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class CasusPVAProductArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusPVAProduct
     */
    private $TCasusPVAProduct;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusPVAProduct
     */
    public function getTCasusPVAProduct()
    {
        return $this->TCasusPVAProduct;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusPVAProduct $TCasusPVAProduct
     * @return CasusPVAProductArray
     */
    public function withTCasusPVAProduct($TCasusPVAProduct)
    {
        $new = clone $this;
        $new->TCasusPVAProduct = $TCasusPVAProduct;

        return $new;
    }
}

