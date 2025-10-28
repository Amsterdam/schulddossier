<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class RelatieProductArray
{

    /**
     * @var TRelatieProduct[] $TRelatieProduct
     */
    protected $TRelatieProduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TRelatieProduct[]
     */
    public function getTRelatieProduct()
    {
      return $this->TRelatieProduct;
    }

    /**
     * @param TRelatieProduct[] $TRelatieProduct
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\RelatieProductArray
     */
    public function setTRelatieProduct(array $TRelatieProduct = null)
    {
      $this->TRelatieProduct = $TRelatieProduct;
      return $this;
    }

}
