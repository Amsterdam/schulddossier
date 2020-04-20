<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSAfschriftMutaties
{

    /**
     * @var PRSAfschriftMutatieArray $AfschriftMutaties
     */
    protected $AfschriftMutaties = null;

    /**
     * @param PRSAfschriftMutatieArray $AfschriftMutaties
     */
    public function __construct($AfschriftMutaties)
    {
      $this->AfschriftMutaties = $AfschriftMutaties;
    }

    /**
     * @return PRSAfschriftMutatieArray
     */
    public function getAfschriftMutaties()
    {
      return $this->AfschriftMutaties;
    }

    /**
     * @param PRSAfschriftMutatieArray $AfschriftMutaties
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftMutaties
     */
    public function setAfschriftMutaties($AfschriftMutaties)
    {
      $this->AfschriftMutaties = $AfschriftMutaties;
      return $this;
    }

}
