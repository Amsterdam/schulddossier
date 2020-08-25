<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSRVAanvraagHeader
{

    /**
     * @var int $RelatieCode
     */
    protected $RelatieCode = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var boolean $IsNPS
     */
    protected $IsNPS = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $Statustekst
     */
    protected $Statustekst = null;

    /**
     * @var \DateTime $Aanvraagdatum
     */
    protected $Aanvraagdatum = null;

    /**
     * @var string $ExtraStatus
     */
    protected $ExtraStatus = null;

    /**
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param boolean $IsNPS
     * @param string $Status
     * @param string $Statustekst
     * @param \DateTime $Aanvraagdatum
     * @param string $ExtraStatus
     */
    public function __construct($RelatieCode, $Volgnummer, $IsNPS, $Status, $Statustekst, \DateTime $Aanvraagdatum, $ExtraStatus)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Volgnummer = $Volgnummer;
      $this->IsNPS = $IsNPS;
      $this->Status = $Status;
      $this->Statustekst = $Statustekst;
      $this->Aanvraagdatum = $Aanvraagdatum->format(\DateTime::ATOM);
      $this->ExtraStatus = $ExtraStatus;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
      return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraagHeader
     */
    public function setRelatieCode($RelatieCode)
    {
      $this->RelatieCode = $RelatieCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
      return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraagHeader
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNPS()
    {
      return $this->IsNPS;
    }

    /**
     * @param boolean $IsNPS
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraagHeader
     */
    public function setIsNPS($IsNPS)
    {
      $this->IsNPS = $IsNPS;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraagHeader
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatustekst()
    {
      return $this->Statustekst;
    }

    /**
     * @param string $Statustekst
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraagHeader
     */
    public function setStatustekst($Statustekst)
    {
      $this->Statustekst = $Statustekst;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAanvraagdatum()
    {
      if ($this->Aanvraagdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Aanvraagdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Aanvraagdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraagHeader
     */
    public function setAanvraagdatum(\DateTime $Aanvraagdatum)
    {
      $this->Aanvraagdatum = $Aanvraagdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraStatus()
    {
      return $this->ExtraStatus;
    }

    /**
     * @param string $ExtraStatus
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVAanvraagHeader
     */
    public function setExtraStatus($ExtraStatus)
    {
      $this->ExtraStatus = $ExtraStatus;
      return $this;
    }

}
