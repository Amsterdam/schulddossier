<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class DKHeaderArray
{

    /**
     * @var TDKHeader[] $TDKHeader
     */
    protected $TDKHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TDKHeader[]
     */
    public function getTDKHeader()
    {
      return $this->TDKHeader;
    }

    /**
     * @param TDKHeader[] $TDKHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\DKHeaderArray
     */
    public function setTDKHeader(array $TDKHeader = null)
    {
      $this->TDKHeader = $TDKHeader;
      return $this;
    }

}
