<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TCasusHeader
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var string $CasusCode
     */
    protected $CasusCode = null;

    /**
     * @var \DateTime $Aanmaakdatum
     */
    protected $Aanmaakdatum = null;

    /**
     * @var eCasusStatus $CasusStatus
     */
    protected $CasusStatus = null;

    /**
     * @var string $CasusStatusTekst
     */
    protected $CasusStatusTekst = null;

    /**
     * @param int $Relatiecode
     * @param int $Volgnummer
     * @param string $CasusCode
     * @param \DateTime $Aanmaakdatum
     * @param eCasusStatus $CasusStatus
     * @param string $CasusStatusTekst
     */
    public function __construct($Relatiecode, $Volgnummer, $CasusCode, \DateTime $Aanmaakdatum, $CasusStatus, $CasusStatusTekst)
    {
      $this->Relatiecode = $Relatiecode;
      $this->Volgnummer = $Volgnummer;
      $this->CasusCode = $CasusCode;
      $this->Aanmaakdatum = $Aanmaakdatum->format(\DateTime::ATOM);
      $this->CasusStatus = $CasusStatus;
      $this->CasusStatusTekst = $CasusStatusTekst;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusHeader
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusHeader
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getCasusCode()
    {
      return $this->CasusCode;
    }

    /**
     * @param string $CasusCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusHeader
     */
    public function setCasusCode($CasusCode)
    {
      $this->CasusCode = $CasusCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAanmaakdatum()
    {
      if ($this->Aanmaakdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Aanmaakdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Aanmaakdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusHeader
     */
    public function setAanmaakdatum(\DateTime $Aanmaakdatum)
    {
      $this->Aanmaakdatum = $Aanmaakdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return eCasusStatus
     */
    public function getCasusStatus()
    {
      return $this->CasusStatus;
    }

    /**
     * @param eCasusStatus $CasusStatus
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusHeader
     */
    public function setCasusStatus($CasusStatus)
    {
      $this->CasusStatus = $CasusStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCasusStatusTekst()
    {
      return $this->CasusStatusTekst;
    }

    /**
     * @param string $CasusStatusTekst
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusHeader
     */
    public function setCasusStatusTekst($CasusStatusTekst)
    {
      $this->CasusStatusTekst = $CasusStatusTekst;
      return $this;
    }

}
