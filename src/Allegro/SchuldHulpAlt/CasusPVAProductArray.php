<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class CasusPVAProductArray
{

    /**
     * @var TCasusPVAProduct[] $TCasusPVAProduct
     */
    protected $TCasusPVAProduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TCasusPVAProduct[]
     */
    public function getTCasusPVAProduct()
    {
      return $this->TCasusPVAProduct;
    }

    /**
     * @param TCasusPVAProduct[] $TCasusPVAProduct
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\CasusPVAProductArray
     */
    public function setTCasusPVAProduct(array $TCasusPVAProduct = null)
    {
      $this->TCasusPVAProduct = $TCasusPVAProduct;
      return $this;
    }

}
