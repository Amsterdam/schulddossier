<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class BijlageArray
{

    /**
     * @var TBijlage[] $TBijlage
     */
    protected $TBijlage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBijlage[]
     */
    public function getTBijlage()
    {
      return $this->TBijlage;
    }

    /**
     * @param TBijlage[] $TBijlage
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\BijlageArray
     */
    public function setTBijlage(array $TBijlage = null)
    {
      $this->TBijlage = $TBijlage;
      return $this;
    }

}
