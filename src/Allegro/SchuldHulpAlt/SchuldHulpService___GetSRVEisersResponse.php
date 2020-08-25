<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSRVEisersResponse
{

    /**
     * @var TSRVEisers $Result
     */
    protected $Result = null;

    /**
     * @param TSRVEisers $Result
     */
    public function __construct($Result)
    {
      $this->Result = $Result;
    }

    /**
     * @return TSRVEisers
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param TSRVEisers $Result
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSRVEisersResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
