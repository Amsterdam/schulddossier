<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSBHeader
{

    /**
     * @var int $RelatieCode
     */
    protected $RelatieCode = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var boolean $IsNPS
     */
    protected $IsNPS = null;

    /**
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param boolean $IsNPS
     */
    public function __construct($RelatieCode, $Volgnummer, $IsNPS)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Volgnummer = $Volgnummer;
      $this->IsNPS = $IsNPS;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
      return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBHeader
     */
    public function setRelatieCode($RelatieCode)
    {
      $this->RelatieCode = $RelatieCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
      return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBHeader
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNPS()
    {
      return $this->IsNPS;
    }

    /**
     * @param boolean $IsNPS
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBHeader
     */
    public function setIsNPS($IsNPS)
    {
      $this->IsNPS = $IsNPS;
      return $this;
    }

}
