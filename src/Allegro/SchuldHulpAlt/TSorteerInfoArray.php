<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSorteerInfoArray
{

    /**
     * @var TSorteerInfo[] $TSorteerInfo
     */
    protected $TSorteerInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TSorteerInfo[]
     */
    public function getTSorteerInfo()
    {
      return $this->TSorteerInfo;
    }

    /**
     * @param TSorteerInfo[] $TSorteerInfo
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSorteerInfoArray
     */
    public function setTSorteerInfo(array $TSorteerInfo = null)
    {
      $this->TSorteerInfo = $TSorteerInfo;
      return $this;
    }

}
