<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxTekstArray
{

    /**
     * @var TBBoxTekst[] $TBBoxTekst
     */
    protected $TBBoxTekst = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBBoxTekst[]
     */
    public function getTBBoxTekst()
    {
      return $this->TBBoxTekst;
    }

    /**
     * @param TBBoxTekst[] $TBBoxTekst
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxTekstArray
     */
    public function setTBBoxTekst(array $TBBoxTekst = null)
    {
      $this->TBBoxTekst = $TBBoxTekst;
      return $this;
    }

}
