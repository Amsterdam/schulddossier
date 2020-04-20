<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TTeam
{

    /**
     * @var string $Team
     */
    protected $Team = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var boolean $Standaard
     */
    protected $Standaard = null;

    /**
     * @param string $Team
     * @param int $Code
     * @param boolean $Standaard
     */
    public function __construct($Team, $Code, $Standaard)
    {
      $this->Team = $Team;
      $this->Code = $Code;
      $this->Standaard = $Standaard;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
      return $this->Team;
    }

    /**
     * @param string $Team
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTeam
     */
    public function setTeam($Team)
    {
      $this->Team = $Team;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTeam
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStandaard()
    {
      return $this->Standaard;
    }

    /**
     * @param boolean $Standaard
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTeam
     */
    public function setStandaard($Standaard)
    {
      $this->Standaard = $Standaard;
      return $this;
    }

}
