<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class RCHeaderArray
{

    /**
     * @var TRCHeader[] $TRCHeader
     */
    protected $TRCHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TRCHeader[]
     */
    public function getTRCHeader()
    {
      return $this->TRCHeader;
    }

    /**
     * @param TRCHeader[] $TRCHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\RCHeaderArray
     */
    public function setTRCHeader(array $TRCHeader = null)
    {
      $this->TRCHeader = $TRCHeader;
      return $this;
    }

}
