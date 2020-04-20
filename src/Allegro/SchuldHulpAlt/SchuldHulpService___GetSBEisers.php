<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSBEisers
{

    /**
     * @var TSBHeader $aHeader
     */
    protected $aHeader = null;

    /**
     * @param TSBHeader $aHeader
     */
    public function __construct($aHeader)
    {
      $this->aHeader = $aHeader;
    }

    /**
     * @return TSBHeader
     */
    public function getAHeader()
    {
      return $this->aHeader;
    }

    /**
     * @param TSBHeader $aHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSBEisers
     */
    public function setAHeader($aHeader)
    {
      $this->aHeader = $aHeader;
      return $this;
    }

}
