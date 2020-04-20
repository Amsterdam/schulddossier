<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSBResponse
{

    /**
     * @var TSB $Result
     */
    protected $Result = null;

    /**
     * @param TSB $Result
     */
    public function __construct($Result)
    {
      $this->Result = $Result;
    }

    /**
     * @return TSB
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param TSB $Result
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSBResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
