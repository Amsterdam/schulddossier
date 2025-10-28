<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleRequestInfoArray
{

    /**
     * @var SimpleRequestInfo[] $SimpleRequestInfo
     */
    protected $SimpleRequestInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleRequestInfo[]
     */
    public function getSimpleRequestInfo()
    {
      return $this->SimpleRequestInfo;
    }

    /**
     * @param SimpleRequestInfo[] $SimpleRequestInfo
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleRequestInfoArray
     */
    public function setSimpleRequestInfo(array $SimpleRequestInfo = null)
    {
      $this->SimpleRequestInfo = $SimpleRequestInfo;
      return $this;
    }

}
