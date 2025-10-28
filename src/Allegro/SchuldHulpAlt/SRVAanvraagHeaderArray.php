<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SRVAanvraagHeaderArray
{

    /**
     * @var TSRVAanvraagHeader[] $TSRVAanvraagHeader
     */
    protected $TSRVAanvraagHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TSRVAanvraagHeader[]
     */
    public function getTSRVAanvraagHeader()
    {
      return $this->TSRVAanvraagHeader;
    }

    /**
     * @param TSRVAanvraagHeader[] $TSRVAanvraagHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SRVAanvraagHeaderArray
     */
    public function setTSRVAanvraagHeader(array $TSRVAanvraagHeader = null)
    {
      $this->TSRVAanvraagHeader = $TSRVAanvraagHeader;
      return $this;
    }

}
