<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SRVEiserArray
{

    /**
     * @var TSRVEiser[] $TSRVEiser
     */
    protected $TSRVEiser = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TSRVEiser[]
     */
    public function getTSRVEiser()
    {
      return $this->TSRVEiser;
    }

    /**
     * @param TSRVEiser[] $TSRVEiser
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SRVEiserArray
     */
    public function setTSRVEiser(array $TSRVEiser = null)
    {
      $this->TSRVEiser = $TSRVEiser;
      return $this;
    }

}
