<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class AfspraakArray
{

    /**
     * @var TAfspraak[] $TAfspraak
     */
    protected $TAfspraak = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TAfspraak[]
     */
    public function getTAfspraak()
    {
      return $this->TAfspraak;
    }

    /**
     * @param TAfspraak[] $TAfspraak
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AfspraakArray
     */
    public function setTAfspraak(array $TAfspraak = null)
    {
      $this->TAfspraak = $TAfspraak;
      return $this;
    }

}
