<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class CasusPVAArray
{

    /**
     * @var TCasusPVA[] $TCasusPVA
     */
    protected $TCasusPVA = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TCasusPVA[]
     */
    public function getTCasusPVA()
    {
      return $this->TCasusPVA;
    }

    /**
     * @param TCasusPVA[] $TCasusPVA
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\CasusPVAArray
     */
    public function setTCasusPVA(array $TCasusPVA = null)
    {
      $this->TCasusPVA = $TCasusPVA;
      return $this;
    }

}
