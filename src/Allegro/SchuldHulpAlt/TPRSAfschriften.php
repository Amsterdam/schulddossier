<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPRSAfschriften
{

    /**
     * @var PRSAfschriftArray $Afschriften
     */
    protected $Afschriften = null;

    /**
     * @param PRSAfschriftArray $Afschriften
     */
    public function __construct($Afschriften)
    {
      $this->Afschriften = $Afschriften;
    }

    /**
     * @return PRSAfschriftArray
     */
    public function getAfschriften()
    {
      return $this->Afschriften;
    }

    /**
     * @param PRSAfschriftArray $Afschriften
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPRSAfschriften
     */
    public function setAfschriften($Afschriften)
    {
      $this->Afschriften = $Afschriften;
      return $this;
    }

}
