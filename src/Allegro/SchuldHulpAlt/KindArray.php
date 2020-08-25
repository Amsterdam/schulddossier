<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class KindArray
{

    /**
     * @var TKind[] $TKind
     */
    protected $TKind = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TKind[]
     */
    public function getTKind()
    {
      return $this->TKind;
    }

    /**
     * @param TKind[] $TKind
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\KindArray
     */
    public function setTKind(array $TKind = null)
    {
      $this->TKind = $TKind;
      return $this;
    }

}
