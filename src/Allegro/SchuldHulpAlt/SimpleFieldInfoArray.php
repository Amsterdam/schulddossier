<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleFieldInfoArray
{

    /**
     * @var SimpleFieldInfo[] $SimpleFieldInfo
     */
    protected $SimpleFieldInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleFieldInfo[]
     */
    public function getSimpleFieldInfo()
    {
      return $this->SimpleFieldInfo;
    }

    /**
     * @param SimpleFieldInfo[] $SimpleFieldInfo
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleFieldInfoArray
     */
    public function setSimpleFieldInfo(array $SimpleFieldInfo = null)
    {
      $this->SimpleFieldInfo = $SimpleFieldInfo;
      return $this;
    }

}
