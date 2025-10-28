<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class CasusToelichtingArray
{

    /**
     * @var TCasusToelichting[] $TCasusToelichting
     */
    protected $TCasusToelichting = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TCasusToelichting[]
     */
    public function getTCasusToelichting()
    {
      return $this->TCasusToelichting;
    }

    /**
     * @param TCasusToelichting[] $TCasusToelichting
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\CasusToelichtingArray
     */
    public function setTCasusToelichting(array $TCasusToelichting = null)
    {
      $this->TCasusToelichting = $TCasusToelichting;
      return $this;
    }

}
