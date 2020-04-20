<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSAfschriftReserveringen
{

    /**
     * @var PRSAfschriftReseveringArray $AfschriftReserveringen
     */
    protected $AfschriftReserveringen = null;

    /**
     * @param PRSAfschriftReseveringArray $AfschriftReserveringen
     */
    public function __construct($AfschriftReserveringen)
    {
      $this->AfschriftReserveringen = $AfschriftReserveringen;
    }

    /**
     * @return PRSAfschriftReseveringArray
     */
    public function getAfschriftReserveringen()
    {
      return $this->AfschriftReserveringen;
    }

    /**
     * @param PRSAfschriftReseveringArray $AfschriftReserveringen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriftReserveringen
     */
    public function setAfschriftReserveringen($AfschriftReserveringen)
    {
      $this->AfschriftReserveringen = $AfschriftReserveringen;
      return $this;
    }

}
