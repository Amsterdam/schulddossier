<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TrajectTaakArray
{

    /**
     * @var TTrajectTaak[] $TTrajectTaak
     */
    protected $TTrajectTaak = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TTrajectTaak[]
     */
    public function getTTrajectTaak()
    {
      return $this->TTrajectTaak;
    }

    /**
     * @param TTrajectTaak[] $TTrajectTaak
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TrajectTaakArray
     */
    public function setTTrajectTaak(array $TTrajectTaak = null)
    {
      $this->TTrajectTaak = $TTrajectTaak;
      return $this;
    }

}
