<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService___GetLijstSchuldeisersResponse
{

    /**
     * @var OrganisatieArray $Result
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
     * @param OrganisatieArray $Result
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
     * @return OrganisatieArray
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param OrganisatieArray $Result
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetLijstSchuldeisersResponse
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetLijstSchuldeisersResponse
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___GetLijstSchuldeisersResponse
     */
    public function setExtraInfoOmschrijving($ExtraInfoOmschrijving)
    {
      $this->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;
      return $this;
    }

}
