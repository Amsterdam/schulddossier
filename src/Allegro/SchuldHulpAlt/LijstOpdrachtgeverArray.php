<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class LijstOpdrachtgeverArray
{

    /**
     * @var TLijstOpdrachtgever[] $TLijstOpdrachtgever
     */
    protected $TLijstOpdrachtgever = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TLijstOpdrachtgever[]
     */
    public function getTLijstOpdrachtgever()
    {
      return $this->TLijstOpdrachtgever;
    }

    /**
     * @param TLijstOpdrachtgever[] $TLijstOpdrachtgever
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\LijstOpdrachtgeverArray
     */
    public function setTLijstOpdrachtgever(array $TLijstOpdrachtgever = null)
    {
      $this->TLijstOpdrachtgever = $TLijstOpdrachtgever;
      return $this;
    }

}
