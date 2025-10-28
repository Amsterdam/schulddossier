<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class PRSAfschriftArray
{

    /**
     * @var TPRSAfschrift[] $TPRSAfschrift
     */
    protected $TPRSAfschrift = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TPRSAfschrift[]
     */
    public function getTPRSAfschrift()
    {
      return $this->TPRSAfschrift;
    }

    /**
     * @param TPRSAfschrift[] $TPRSAfschrift
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\PRSAfschriftArray
     */
    public function setTPRSAfschrift(array $TPRSAfschrift = null)
    {
      $this->TPRSAfschrift = $TPRSAfschrift;
      return $this;
    }

}
