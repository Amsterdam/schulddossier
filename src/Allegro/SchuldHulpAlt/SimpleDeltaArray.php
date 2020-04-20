<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDeltaArray
{

    /**
     * @var SimpleDelta[] $SimpleDelta
     */
    protected $SimpleDelta = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleDelta[]
     */
    public function getSimpleDelta()
    {
      return $this->SimpleDelta;
    }

    /**
     * @param SimpleDelta[] $SimpleDelta
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDeltaArray
     */
    public function setSimpleDelta(array $SimpleDelta = null)
    {
      $this->SimpleDelta = $SimpleDelta;
      return $this;
    }

}
