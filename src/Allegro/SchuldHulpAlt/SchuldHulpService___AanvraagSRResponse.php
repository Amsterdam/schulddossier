<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___AanvraagSRResponse
{

    /**
     * @var boolean $Result
     */
    protected $Result = null;

    /**
     * @var int $ExtraInfo
     */
    protected $ExtraInfo = null;

    /**
     * @var string $ExtraInfoOmschrijving
     */
    protected $ExtraInfoOmschrijving = null;

    /**
     * @param boolean $Result
     * @param int $ExtraInfo
     * @param string $ExtraInfoOmschrijving
     */
    public function __construct($Result, $ExtraInfo, $ExtraInfoOmschrijving)
    {
      $this->Result = $Result;
      $this->ExtraInfo = $ExtraInfo;
      $this->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param boolean $Result
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___AanvraagSRResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

    /**
     * @return int
     */
    public function getExtraInfo()
    {
      return $this->ExtraInfo;
    }

    /**
     * @param int $ExtraInfo
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___AanvraagSRResponse
     */
    public function setExtraInfo($ExtraInfo)
    {
      $this->ExtraInfo = $ExtraInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfoOmschrijving()
    {
      return $this->ExtraInfoOmschrijving;
    }

    /**
     * @param string $ExtraInfoOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___AanvraagSRResponse
     */
    public function setExtraInfoOmschrijving($ExtraInfoOmschrijving)
    {
      $this->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;
      return $this;
    }

}
