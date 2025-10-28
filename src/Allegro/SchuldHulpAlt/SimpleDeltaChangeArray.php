<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDeltaChangeArray
{

    /**
     * @var SimpleDeltaChange[] $SimpleDeltaChange
     */
    protected $SimpleDeltaChange = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleDeltaChange[]
     */
    public function getSimpleDeltaChange()
    {
      return $this->SimpleDeltaChange;
    }

    /**
     * @param SimpleDeltaChange[] $SimpleDeltaChange
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDeltaChangeArray
     */
    public function setSimpleDeltaChange(array $SimpleDeltaChange = null)
    {
      $this->SimpleDeltaChange = $SimpleDeltaChange;
      return $this;
    }

}
