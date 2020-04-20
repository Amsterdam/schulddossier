<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TeamArray
{

    /**
     * @var TTeam[] $TTeam
     */
    protected $TTeam = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TTeam[]
     */
    public function getTTeam()
    {
      return $this->TTeam;
    }

    /**
     * @param TTeam[] $TTeam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TeamArray
     */
    public function setTTeam(array $TTeam = null)
    {
      $this->TTeam = $TTeam;
      return $this;
    }

}
