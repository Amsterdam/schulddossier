<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class CasusPVAProductArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusPVAProduct>
     */
    private array $TCasusPVAProduct;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusPVAProduct>
     */
    public function getTCasusPVAProduct() : array
    {
        return $this->TCasusPVAProduct;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusPVAProduct> $TCasusPVAProduct
     * @return static
     */
    public function withTCasusPVAProduct(array $TCasusPVAProduct) : static
    {
        $new = clone $this;
        $new->TCasusPVAProduct = $TCasusPVAProduct;

        return $new;
    }
}

