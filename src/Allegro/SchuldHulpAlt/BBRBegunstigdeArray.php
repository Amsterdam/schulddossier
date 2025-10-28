<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class BBRBegunstigdeArray
{

    /**
     * @var TBBRBegunstigde[] $TBBRBegunstigde
     */
    protected $TBBRBegunstigde = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBBRBegunstigde[]
     */
    public function getTBBRBegunstigde()
    {
      return $this->TBBRBegunstigde;
    }

    /**
     * @param TBBRBegunstigde[] $TBBRBegunstigde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\BBRBegunstigdeArray
     */
    public function setTBBRBegunstigde(array $TBBRBegunstigde = null)
    {
      $this->TBBRBegunstigde = $TBBRBegunstigde;
      return $this;
    }

}
