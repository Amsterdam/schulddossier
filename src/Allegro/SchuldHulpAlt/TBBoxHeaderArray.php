<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxHeaderArray
{

    /**
     * @var TBBoxHeader[] $TBBoxHeader
     */
    protected $TBBoxHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBBoxHeader[]
     */
    public function getTBBoxHeader()
    {
      return $this->TBBoxHeader;
    }

    /**
     * @param TBBoxHeader[] $TBBoxHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeaderArray
     */
    public function setTBBoxHeader(array $TBBoxHeader = null)
    {
      $this->TBBoxHeader = $TBBoxHeader;
      return $this;
    }

}
