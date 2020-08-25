<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class Rekeningnummer2Array
{

    /**
     * @var TRekeningnummer[] $TRekeningnummer
     */
    protected $TRekeningnummer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TRekeningnummer[]
     */
    public function getTRekeningnummer()
    {
      return $this->TRekeningnummer;
    }

    /**
     * @param TRekeningnummer[] $TRekeningnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\Rekeningnummer2Array
     */
    public function setTRekeningnummer(array $TRekeningnummer = null)
    {
      $this->TRekeningnummer = $TRekeningnummer;
      return $this;
    }

}
