<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class CasusHeaderArray
{

    /**
     * @var TCasusHeader[] $TCasusHeader
     */
    protected $TCasusHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TCasusHeader[]
     */
    public function getTCasusHeader()
    {
      return $this->TCasusHeader;
    }

    /**
     * @param TCasusHeader[] $TCasusHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\CasusHeaderArray
     */
    public function setTCasusHeader(array $TCasusHeader = null)
    {
      $this->TCasusHeader = $TCasusHeader;
      return $this;
    }

}
