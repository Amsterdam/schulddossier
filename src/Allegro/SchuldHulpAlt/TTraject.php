<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TTraject
{

    /**
     * @var int $UniekTrajectNummer
     */
    protected $UniekTrajectNummer = null;

    /**
     * @var TTrajectSoort $TrajectSoort
     */
    protected $TrajectSoort = null;

    /**
     * @var \DateTime $Startdatum
     */
    protected $Startdatum = null;

    /**
     * @var TMedewerker $StartMedewerker
     */
    protected $StartMedewerker = null;

    /**
     * @var \DateTime $Einddatum
     */
    protected $Einddatum = null;

    /**
     * @var TMedewerker $EindMedewerker
     */
    protected $EindMedewerker = null;

    /**
     * @var boolean $Lopend
     */
    protected $Lopend = null;

    /**
     * @var int $Contractvolgnummer
     */
    protected $Contractvolgnummer = null;

    /**
     * @var string $ContractVolgnummerSoort
     */
    protected $ContractVolgnummerSoort = null;

    /**
     * @param int $UniekTrajectNummer
     * @param TTrajectSoort $TrajectSoort
     * @param \DateTime $Startdatum
     * @param TMedewerker $StartMedewerker
     * @param \DateTime $Einddatum
     * @param TMedewerker $EindMedewerker
     * @param boolean $Lopend
     * @param int $Contractvolgnummer
     * @param string $ContractVolgnummerSoort
     */
    public function __construct($UniekTrajectNummer, $TrajectSoort, \DateTime $Startdatum, $StartMedewerker, \DateTime $Einddatum, $EindMedewerker, $Lopend, $Contractvolgnummer, $ContractVolgnummerSoort)
    {
      $this->UniekTrajectNummer = $UniekTrajectNummer;
      $this->TrajectSoort = $TrajectSoort;
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      $this->StartMedewerker = $StartMedewerker;
      $this->Einddatum = $Einddatum->format(\DateTime::ATOM);
      $this->EindMedewerker = $EindMedewerker;
      $this->Lopend = $Lopend;
      $this->Contractvolgnummer = $Contractvolgnummer;
      $this->ContractVolgnummerSoort = $ContractVolgnummerSoort;
    }

    /**
     * @return int
     */
    public function getUniekTrajectNummer()
    {
      return $this->UniekTrajectNummer;
    }

    /**
     * @param int $UniekTrajectNummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setUniekTrajectNummer($UniekTrajectNummer)
    {
      $this->UniekTrajectNummer = $UniekTrajectNummer;
      return $this;
    }

    /**
     * @return TTrajectSoort
     */
    public function getTrajectSoort()
    {
      return $this->TrajectSoort;
    }

    /**
     * @param TTrajectSoort $TrajectSoort
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setTrajectSoort($TrajectSoort)
    {
      $this->TrajectSoort = $TrajectSoort;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setStartdatum(\DateTime $Startdatum)
    {
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return TMedewerker
     */
    public function getStartMedewerker()
    {
      return $this->StartMedewerker;
    }

    /**
     * @param TMedewerker $StartMedewerker
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setStartMedewerker($StartMedewerker)
    {
      $this->StartMedewerker = $StartMedewerker;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEinddatum()
    {
      if ($this->Einddatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Einddatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Einddatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setEinddatum(\DateTime $Einddatum)
    {
      $this->Einddatum = $Einddatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return TMedewerker
     */
    public function getEindMedewerker()
    {
      return $this->EindMedewerker;
    }

    /**
     * @param TMedewerker $EindMedewerker
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setEindMedewerker($EindMedewerker)
    {
      $this->EindMedewerker = $EindMedewerker;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLopend()
    {
      return $this->Lopend;
    }

    /**
     * @param boolean $Lopend
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setLopend($Lopend)
    {
      $this->Lopend = $Lopend;
      return $this;
    }

    /**
     * @return int
     */
    public function getContractvolgnummer()
    {
      return $this->Contractvolgnummer;
    }

    /**
     * @param int $Contractvolgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setContractvolgnummer($Contractvolgnummer)
    {
      $this->Contractvolgnummer = $Contractvolgnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getContractVolgnummerSoort()
    {
      return $this->ContractVolgnummerSoort;
    }

    /**
     * @param string $ContractVolgnummerSoort
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTraject
     */
    public function setContractVolgnummerSoort($ContractVolgnummerSoort)
    {
      $this->ContractVolgnummerSoort = $ContractVolgnummerSoort;
      return $this;
    }

}
