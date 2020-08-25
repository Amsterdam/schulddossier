<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetSBOverzicht
{

    /**
     * @var int $aRelatieCode
     */
    protected $aRelatieCode = null;

    /**
     * @param int $aRelatieCode
     */
    public function __construct($aRelatieCode)
    {
      $this->aRelatieCode = $aRelatieCode;
    }

    /**
     * @return int
     */
    public function getARelatieCode()
    {
      return $this->aRelatieCode;
    }

    /**
     * @param int $aRelatieCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetSBOverzicht
     */
    public function setARelatieCode($aRelatieCode)
    {
      $this->aRelatieCode = $aRelatieCode;
      return $this;
    }

}
