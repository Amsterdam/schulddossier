<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSBOverzichtResponse
{

    /**
     * @var SBHeaderArray $Result
     */
    protected $Result = null;

    /**
     * @param SBHeaderArray $Result
     */
    public function __construct($Result)
    {
      $this->Result = $Result;
    }

    /**
     * @return SBHeaderArray
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param SBHeaderArray $Result
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSBOverzichtResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
