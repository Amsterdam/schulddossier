<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class RelatieProductArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatieProduct>
     */
    private array $TRelatieProduct;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatieProduct>
     */
    public function getTRelatieProduct() : array
    {
        return $this->TRelatieProduct;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatieProduct> $TRelatieProduct
     * @return static
     */
    public function withTRelatieProduct(array $TRelatieProduct) : static
    {
        $new = clone $this;
        $new->TRelatieProduct = $TRelatieProduct;

        return $new;
    }
}

