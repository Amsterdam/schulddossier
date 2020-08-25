<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSMutaties
{

    /**
     * @var PRSMutatieArray $Mutaties
     */
    protected $Mutaties = null;

    /**
     * @param PRSMutatieArray $Mutaties
     */
    public function __construct($Mutaties)
    {
      $this->Mutaties = $Mutaties;
    }

    /**
     * @return PRSMutatieArray
     */
    public function getMutaties()
    {
      return $this->Mutaties;
    }

    /**
     * @param PRSMutatieArray $Mutaties
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSMutaties
     */
    public function setMutaties($Mutaties)
    {
      $this->Mutaties = $Mutaties;
      return $this;
    }

}
