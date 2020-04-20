<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SBHeaderArray
{

    /**
     * @var TSBHeader[] $TSBHeader
     */
    protected $TSBHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TSBHeader[]
     */
    public function getTSBHeader()
    {
      return $this->TSBHeader;
    }

    /**
     * @param TSBHeader[] $TSBHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SBHeaderArray
     */
    public function setTSBHeader(array $TSBHeader = null)
    {
      $this->TSBHeader = $TSBHeader;
      return $this;
    }

}
