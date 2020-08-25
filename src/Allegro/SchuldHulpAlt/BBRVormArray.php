<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class BBRVormArray
{

    /**
     * @var TBBRVorm[] $TBBRVorm
     */
    protected $TBBRVorm = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBBRVorm[]
     */
    public function getTBBRVorm()
    {
      return $this->TBBRVorm;
    }

    /**
     * @param TBBRVorm[] $TBBRVorm
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\BBRVormArray
     */
    public function setTBBRVorm(array $TBBRVorm = null)
    {
      $this->TBBRVorm = $TBBRVorm;
      return $this;
    }

}
