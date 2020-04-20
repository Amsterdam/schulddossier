<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDataResultArray
{

    /**
     * @var SimpleDataResult[] $SimpleDataResult
     */
    protected $SimpleDataResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleDataResult[]
     */
    public function getSimpleDataResult()
    {
      return $this->SimpleDataResult;
    }

    /**
     * @param SimpleDataResult[] $SimpleDataResult
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDataResultArray
     */
    public function setSimpleDataResult(array $SimpleDataResult = null)
    {
      $this->SimpleDataResult = $SimpleDataResult;
      return $this;
    }

}
