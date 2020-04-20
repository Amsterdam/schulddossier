<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxBijlage
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var int $UniekVolgnummer
     */
    protected $UniekVolgnummer = null;

    /**
     * @var base64Binary $Bijlage
     */
    protected $Bijlage = null;

    /**
     * @var int $BijlageSize
     */
    protected $BijlageSize = null;

    /**
     * @var string $BijlageNaam
     */
    protected $BijlageNaam = null;

    /**
     * @param int $Code
     * @param int $UniekVolgnummer
     * @param base64Binary $Bijlage
     * @param int $BijlageSize
     * @param string $BijlageNaam
     */
    public function __construct($Code, $UniekVolgnummer, $Bijlage, $BijlageSize, $BijlageNaam)
    {
      $this->Code = $Code;
      $this->UniekVolgnummer = $UniekVolgnummer;
      $this->Bijlage = $Bijlage;
      $this->BijlageSize = $BijlageSize;
      $this->BijlageNaam = $BijlageNaam;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxBijlage
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer()
    {
      return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxBijlage
     */
    public function setUniekVolgnummer($UniekVolgnummer)
    {
      $this->UniekVolgnummer = $UniekVolgnummer;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBijlage()
    {
      return $this->Bijlage;
    }

    /**
     * @param base64Binary $Bijlage
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxBijlage
     */
    public function setBijlage($Bijlage)
    {
      $this->Bijlage = $Bijlage;
      return $this;
    }

    /**
     * @return int
     */
    public function getBijlageSize()
    {
      return $this->BijlageSize;
    }

    /**
     * @param int $BijlageSize
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxBijlage
     */
    public function setBijlageSize($BijlageSize)
    {
      $this->BijlageSize = $BijlageSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getBijlageNaam()
    {
      return $this->BijlageNaam;
    }

    /**
     * @param string $BijlageNaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxBijlage
     */
    public function setBijlageNaam($BijlageNaam)
    {
      $this->BijlageNaam = $BijlageNaam;
      return $this;
    }

}
