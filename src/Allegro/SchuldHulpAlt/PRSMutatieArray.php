<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class PRSMutatieArray
{

    /**
     * @var TPRSMutatie[] $TPRSMutatie
     */
    protected $TPRSMutatie = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TPRSMutatie[]
     */
    public function getTPRSMutatie()
    {
      return $this->TPRSMutatie;
    }

    /**
     * @param TPRSMutatie[] $TPRSMutatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\PRSMutatieArray
     */
    public function setTPRSMutatie(array $TPRSMutatie = null)
    {
      $this->TPRSMutatie = $TPRSMutatie;
      return $this;
    }

}
