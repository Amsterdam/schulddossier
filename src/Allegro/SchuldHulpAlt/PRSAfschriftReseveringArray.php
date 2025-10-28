<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class PRSAfschriftReseveringArray
{

    /**
     * @var TPRSAfschriftReservering[] $TPRSAfschriftReservering
     */
    protected $TPRSAfschriftReservering = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TPRSAfschriftReservering[]
     */
    public function getTPRSAfschriftReservering()
    {
      return $this->TPRSAfschriftReservering;
    }

    /**
     * @param TPRSAfschriftReservering[] $TPRSAfschriftReservering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\PRSAfschriftReseveringArray
     */
    public function setTPRSAfschriftReservering(array $TPRSAfschriftReservering = null)
    {
      $this->TPRSAfschriftReservering = $TPRSAfschriftReservering;
      return $this;
    }

}
