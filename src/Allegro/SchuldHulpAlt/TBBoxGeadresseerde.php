<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxGeadresseerde
{

    /**
     * @var TMedewerker $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var string $Informatie
     */
    protected $Informatie = null;

    /**
     * @param TMedewerker $Medewerker
     * @param string $Informatie
     */
    public function __construct($Medewerker, $Informatie)
    {
      $this->Medewerker = $Medewerker;
      $this->Informatie = $Informatie;
    }

    /**
     * @return TMedewerker
     */
    public function getMedewerker()
    {
      return $this->Medewerker;
    }

    /**
     * @param TMedewerker $Medewerker
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxGeadresseerde
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
    }

    /**
     * @return string
     */
    public function getInformatie()
    {
      return $this->Informatie;
    }

    /**
     * @param string $Informatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxGeadresseerde
     */
    public function setInformatie($Informatie)
    {
      $this->Informatie = $Informatie;
      return $this;
    }

}
