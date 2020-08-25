<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___AanvraagSR
{

    /**
     * @var TAanvraagSR $aAanvraagSR
     */
    protected $aAanvraagSR = null;

    /**
     * @param TAanvraagSR $aAanvraagSR
     */
    public function __construct($aAanvraagSR)
    {
      $this->aAanvraagSR = $aAanvraagSR;
    }

    /**
     * @return TAanvraagSR
     */
    public function getAAanvraagSR()
    {
      return $this->aAanvraagSR;
    }

    /**
     * @param TAanvraagSR $aAanvraagSR
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___AanvraagSR
     */
    public function setAAanvraagSR($aAanvraagSR)
    {
      $this->aAanvraagSR = $aAanvraagSR;
      return $this;
    }

}
