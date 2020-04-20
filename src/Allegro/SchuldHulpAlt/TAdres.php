<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAdres
{

    /**
     * @var string $Straat
     */
    protected $Straat = null;

    /**
     * @var string $Huisnr
     */
    protected $Huisnr = null;

    /**
     * @var string $HuisnrToev
     */
    protected $HuisnrToev = null;

    /**
     * @var string $Postcode
     */
    protected $Postcode = null;

    /**
     * @var int $PC
     */
    protected $PC = null;

    /**
     * @var string $PL
     */
    protected $PL = null;

    /**
     * @var string $Woonplaats
     */
    protected $Woonplaats = null;

    /**
     * @var string $LandNaam
     */
    protected $LandNaam = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStraat()
    {
      return $this->Straat;
    }

    /**
     * @param string $Straat
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres
     */
    public function setStraat($Straat)
    {
      $this->Straat = $Straat;
      return $this;
    }

    /**
     * @return string
     */
    public function getHuisnr()
    {
      return $this->Huisnr;
    }

    /**
     * @param string $Huisnr
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres
     */
    public function setHuisnr($Huisnr)
    {
      $this->Huisnr = $Huisnr;
      return $this;
    }

    /**
     * @return string
     */
    public function getHuisnrToev()
    {
      return $this->HuisnrToev;
    }

    /**
     * @param string $HuisnrToev
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres
     */
    public function setHuisnrToev($HuisnrToev)
    {
      $this->HuisnrToev = $HuisnrToev;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres
     */
    public function setPostcode($Postcode)
    {
      $this->Postcode = $Postcode;
      return $this;
    }

    /**
     * @return int
     */
    public function getPC()
    {
      return $this->PC;
    }

    /**
     * @param int $PC
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres
     */
    public function setPC($PC)
    {
      $this->PC = $PC;
      return $this;
    }

    /**
     * @return string
     */
    public function getPL()
    {
      return $this->PL;
    }

    /**
     * @param string $PL
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres
     */
    public function setPL($PL)
    {
      $this->PL = $PL;
      return $this;
    }

    /**
     * @return string
     */
    public function getWoonplaats()
    {
      return $this->Woonplaats;
    }

    /**
     * @param string $Woonplaats
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres
     */
    public function setWoonplaats($Woonplaats)
    {
      $this->Woonplaats = $Woonplaats;
      return $this;
    }

    /**
     * @return string
     */
    public function getLandNaam()
    {
      return $this->LandNaam;
    }

    /**
     * @param string $LandNaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres
     */
    public function setLandNaam($LandNaam)
    {
      $this->LandNaam = $LandNaam;
      return $this;
    }

}
