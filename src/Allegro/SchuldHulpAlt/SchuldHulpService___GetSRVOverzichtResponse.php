<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSRVOverzichtResponse
{

    /**
     * @var SRVAanvraagHeaderArray $Result
     */
    protected $Result = null;

    /**
     * @param SRVAanvraagHeaderArray $Result
     */
    public function __construct($Result)
    {
      $this->Result = $Result;
    }

    /**
     * @return SRVAanvraagHeaderArray
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param SRVAanvraagHeaderArray $Result
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSRVOverzichtResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
