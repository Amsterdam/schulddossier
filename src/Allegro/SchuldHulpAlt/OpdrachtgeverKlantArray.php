<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class OpdrachtgeverKlantArray
{

    /**
     * @var TOpdrachtgeverKlant[] $TOpdrachtgeverKlant
     */
    protected $TOpdrachtgeverKlant = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TOpdrachtgeverKlant[]
     */
    public function getTOpdrachtgeverKlant()
    {
      return $this->TOpdrachtgeverKlant;
    }

    /**
     * @param TOpdrachtgeverKlant[] $TOpdrachtgeverKlant
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\OpdrachtgeverKlantArray
     */
    public function setTOpdrachtgeverKlant(array $TOpdrachtgeverKlant = null)
    {
      $this->TOpdrachtgeverKlant = $TOpdrachtgeverKlant;
      return $this;
    }

}
