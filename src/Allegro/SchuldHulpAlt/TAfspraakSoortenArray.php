<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAfspraakSoortenArray
{

    /**
     * @var TAfspraakSoorten[] $TAfspraakSoorten
     */
    protected $TAfspraakSoorten = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TAfspraakSoorten[]
     */
    public function getTAfspraakSoorten()
    {
      return $this->TAfspraakSoorten;
    }

    /**
     * @param TAfspraakSoorten[] $TAfspraakSoorten
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAfspraakSoortenArray
     */
    public function setTAfspraakSoorten(array $TAfspraakSoorten = null)
    {
      $this->TAfspraakSoorten = $TAfspraakSoorten;
      return $this;
    }

}
