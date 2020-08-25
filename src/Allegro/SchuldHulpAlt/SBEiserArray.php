<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SBEiserArray
{

    /**
     * @var TSBEiser[] $TSBEiser
     */
    protected $TSBEiser = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TSBEiser[]
     */
    public function getTSBEiser()
    {
      return $this->TSBEiser;
    }

    /**
     * @param TSBEiser[] $TSBEiser
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SBEiserArray
     */
    public function setTSBEiser(array $TSBEiser = null)
    {
      $this->TSBEiser = $TSBEiser;
      return $this;
    }

}
