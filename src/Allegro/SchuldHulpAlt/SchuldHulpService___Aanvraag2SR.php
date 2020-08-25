<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___Aanvraag2SR
{

    /**
     * @var TAanvraag2SR $aAanvraag2SR
     */
    protected $aAanvraag2SR = null;

    /**
     * @param TAanvraag2SR $aAanvraag2SR
     */
    public function __construct($aAanvraag2SR)
    {
      $this->aAanvraag2SR = $aAanvraag2SR;
    }

    /**
     * @return TAanvraag2SR
     */
    public function getAAanvraag2SR()
    {
      return $this->aAanvraag2SR;
    }

    /**
     * @param TAanvraag2SR $aAanvraag2SR
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___Aanvraag2SR
     */
    public function setAAanvraag2SR($aAanvraag2SR)
    {
      $this->aAanvraag2SR = $aAanvraag2SR;
      return $this;
    }

}
