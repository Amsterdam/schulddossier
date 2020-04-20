<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSRVAanvraagResponse
{

    /**
     * @var TSRVAanvraag $Result
     */
    protected $Result = null;

    /**
     * @param TSRVAanvraag $Result
     */
    public function __construct($Result)
    {
      $this->Result = $Result;
    }

    /**
     * @return TSRVAanvraag
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param TSRVAanvraag $Result
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSRVAanvraagResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
