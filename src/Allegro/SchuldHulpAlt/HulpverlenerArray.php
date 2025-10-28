<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class HulpverlenerArray
{

    /**
     * @var THulpverlener[] $THulpverlener
     */
    protected $THulpverlener = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return THulpverlener[]
     */
    public function getTHulpverlener()
    {
      return $this->THulpverlener;
    }

    /**
     * @param THulpverlener[] $THulpverlener
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\HulpverlenerArray
     */
    public function setTHulpverlener(array $THulpverlener = null)
    {
      $this->THulpverlener = $THulpverlener;
      return $this;
    }

}
