<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class BBRHeaderArray
{

    /**
     * @var TBBRHeader[] $TBBRHeader
     */
    protected $TBBRHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBBRHeader[]
     */
    public function getTBBRHeader()
    {
      return $this->TBBRHeader;
    }

    /**
     * @param TBBRHeader[] $TBBRHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\BBRHeaderArray
     */
    public function setTBBRHeader(array $TBBRHeader = null)
    {
      $this->TBBRHeader = $TBBRHeader;
      return $this;
    }

}
