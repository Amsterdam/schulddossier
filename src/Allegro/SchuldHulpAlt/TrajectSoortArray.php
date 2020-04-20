<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TrajectSoortArray
{

    /**
     * @var TTrajectSoort[] $TTrajectSoort
     */
    protected $TTrajectSoort = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TTrajectSoort[]
     */
    public function getTTrajectSoort()
    {
      return $this->TTrajectSoort;
    }

    /**
     * @param TTrajectSoort[] $TTrajectSoort
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TrajectSoortArray
     */
    public function setTTrajectSoort(array $TTrajectSoort = null)
    {
      $this->TTrajectSoort = $TTrajectSoort;
      return $this;
    }

}
