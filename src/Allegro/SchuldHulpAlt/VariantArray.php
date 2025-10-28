<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class VariantArray
{

    /**
     * @var anyType[] $anyType
     */
    protected $anyType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyType[]
     */
    public function getAnyType()
    {
      return $this->anyType;
    }

    /**
     * @param anyType[] $anyType
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\VariantArray
     */
    public function setAnyType(array $anyType = null)
    {
      $this->anyType = $anyType;
      return $this;
    }

}
