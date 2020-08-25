<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPLHeader
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
     * @var \DateTime $Startdatum
     */
    protected $Startdatum = null;

    /**
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param \DateTime $Startdatum
     */
    public function __construct($RelatieCode, $Volgnummer, \DateTime $Startdatum)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Volgnummer = $Volgnummer;
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLHeader
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLHeader
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartdatum()
    {
      if ($this->Startdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Startdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Startdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLHeader
     */
    public function setStartdatum(\DateTime $Startdatum)
    {
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      return $this;
    }

}
