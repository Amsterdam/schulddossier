<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class CasusNotitieArray
{

    /**
     * @var TCasusNotitie[] $TCasusNotitie
     */
    protected $TCasusNotitie = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TCasusNotitie[]
     */
    public function getTCasusNotitie()
    {
      return $this->TCasusNotitie;
    }

    /**
     * @param TCasusNotitie[] $TCasusNotitie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\CasusNotitieArray
     */
    public function setTCasusNotitie(array $TCasusNotitie = null)
    {
      $this->TCasusNotitie = $TCasusNotitie;
      return $this;
    }

}
