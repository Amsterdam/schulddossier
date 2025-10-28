<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TExtraProductHeaderArray
{

    /**
     * @var TExtraProductHeader[] $TExtraProductHeader
     */
    protected $TExtraProductHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TExtraProductHeader[]
     */
    public function getTExtraProductHeader()
    {
      return $this->TExtraProductHeader;
    }

    /**
     * @param TExtraProductHeader[] $TExtraProductHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProductHeaderArray
     */
    public function setTExtraProductHeader(array $TExtraProductHeader = null)
    {
      $this->TExtraProductHeader = $TExtraProductHeader;
      return $this;
    }

}
