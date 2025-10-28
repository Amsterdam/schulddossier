<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class RelatiecodeBedrijfcodeArray
{

    /**
     * @var TRelatiecodeBedrijfcode[] $TRelatiecodeBedrijfcode
     */
    protected $TRelatiecodeBedrijfcode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TRelatiecodeBedrijfcode[]
     */
    public function getTRelatiecodeBedrijfcode()
    {
      return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param TRelatiecodeBedrijfcode[] $TRelatiecodeBedrijfcode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\RelatiecodeBedrijfcodeArray
     */
    public function setTRelatiecodeBedrijfcode(array $TRelatiecodeBedrijfcode = null)
    {
      $this->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;
      return $this;
    }

}
