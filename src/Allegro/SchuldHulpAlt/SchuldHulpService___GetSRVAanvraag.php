<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSRVAanvraag
{

    /**
     * @var TSRVAanvraagHeader $aHeader
     */
    protected $aHeader = null;

    /**
     * @param TSRVAanvraagHeader $aHeader
     */
    public function __construct($aHeader)
    {
      $this->aHeader = $aHeader;
    }

    /**
     * @return TSRVAanvraagHeader
     */
    public function getAHeader()
    {
      return $this->aHeader;
    }

    /**
     * @param TSRVAanvraagHeader $aHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSRVAanvraag
     */
    public function setAHeader($aHeader)
    {
      $this->aHeader = $aHeader;
      return $this;
    }

}
