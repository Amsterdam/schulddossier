<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TContractenLijst
{

    /**
     * @var ContractArray $Contracten
     */
    protected $Contracten = null;

    /**
     * @param ContractArray $Contracten
     */
    public function __construct($Contracten)
    {
      $this->Contracten = $Contracten;
    }

    /**
     * @return ContractArray
     */
    public function getContracten()
    {
      return $this->Contracten;
    }

    /**
     * @param ContractArray $Contracten
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContractenLijst
     */
    public function setContracten($Contracten)
    {
      $this->Contracten = $Contracten;
      return $this;
    }

}
