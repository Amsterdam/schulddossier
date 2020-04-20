<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSBEisersResponse
{

    /**
     * @var TSBEisers $Result
     */
    protected $Result = null;

    /**
     * @param TSBEisers $Result
     */
    public function __construct($Result)
    {
      $this->Result = $Result;
    }

    /**
     * @return TSBEisers
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param TSBEisers $Result
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSBEisersResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
