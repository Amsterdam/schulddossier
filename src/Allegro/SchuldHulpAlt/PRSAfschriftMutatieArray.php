<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class PRSAfschriftMutatieArray
{

    /**
     * @var TPRSAfschriftMutatie[] $TPRSAfschriftMutatie
     */
    protected $TPRSAfschriftMutatie = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TPRSAfschriftMutatie[]
     */
    public function getTPRSAfschriftMutatie()
    {
      return $this->TPRSAfschriftMutatie;
    }

    /**
     * @param TPRSAfschriftMutatie[] $TPRSAfschriftMutatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\PRSAfschriftMutatieArray
     */
    public function setTPRSAfschriftMutatie(array $TPRSAfschriftMutatie = null)
    {
      $this->TPRSAfschriftMutatie = $TPRSAfschriftMutatie;
      return $this;
    }

}
