<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TRelatiecodeBedrijfcode
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $Bedrijfscode
     */
    protected $Bedrijfscode = null;

    /**
     * @var string $Bedrijfsnaam
     */
    protected $Bedrijfsnaam = null;

    /**
     * @param int $Relatiecode
     * @param int $Bedrijfscode
     * @param string $Bedrijfsnaam
     */
    public function __construct($Relatiecode, $Bedrijfscode, $Bedrijfsnaam)
    {
      $this->Relatiecode = $Relatiecode;
      $this->Bedrijfscode = $Bedrijfscode;
      $this->Bedrijfsnaam = $Bedrijfsnaam;
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
      return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatiecodeBedrijfcode
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
    }

    /**
     * @return int
     */
    public function getBedrijfscode()
    {
      return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatiecodeBedrijfcode
     */
    public function setBedrijfscode($Bedrijfscode)
    {
      $this->Bedrijfscode = $Bedrijfscode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBedrijfsnaam()
    {
      return $this->Bedrijfsnaam;
    }

    /**
     * @param string $Bedrijfsnaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatiecodeBedrijfcode
     */
    public function setBedrijfsnaam($Bedrijfsnaam)
    {
      $this->Bedrijfsnaam = $Bedrijfsnaam;
      return $this;
    }

}
