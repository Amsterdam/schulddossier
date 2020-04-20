<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSorteerInfo
{

    /**
     * @var eVeldSortering $Veld
     */
    protected $Veld = null;

    /**
     * @var boolean $Oplopend
     */
    protected $Oplopend = null;

    /**
     * @param eVeldSortering $Veld
     * @param boolean $Oplopend
     */
    public function __construct($Veld, $Oplopend)
    {
      $this->Veld = $Veld;
      $this->Oplopend = $Oplopend;
    }

    /**
     * @return eVeldSortering
     */
    public function getVeld()
    {
      return $this->Veld;
    }

    /**
     * @param eVeldSortering $Veld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSorteerInfo
     */
    public function setVeld($Veld)
    {
      $this->Veld = $Veld;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOplopend()
    {
      return $this->Oplopend;
    }

    /**
     * @param boolean $Oplopend
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSorteerInfo
     */
    public function setOplopend($Oplopend)
    {
      $this->Oplopend = $Oplopend;
      return $this;
    }

}
