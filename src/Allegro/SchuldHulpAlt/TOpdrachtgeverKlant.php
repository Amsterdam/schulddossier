<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TOpdrachtgeverKlant
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var string $Zoeknaam
     */
    protected $Zoeknaam = null;

    /**
     * @var \DateTime $GeboorteDatum
     */
    protected $GeboorteDatum = null;

    /**
     * @var int $BSN
     */
    protected $BSN = null;

    /**
     * @var TAdres $Adres
     */
    protected $Adres = null;

    /**
     * @var int $CasusVolgnummer
     */
    protected $CasusVolgnummer = null;

    /**
     * @var int $AanvraagSRVolgnummer
     */
    protected $AanvraagSRVolgnummer = null;

    /**
     * @var int $SRVolgnummer
     */
    protected $SRVolgnummer = null;

    /**
     * @var int $AanvraagBBRVolgnummer
     */
    protected $AanvraagBBRVolgnummer = null;

    /**
     * @var int $BBRVolgnummer
     */
    protected $BBRVolgnummer = null;

    /**
     * @var boolean $CasusCrisis
     */
    protected $CasusCrisis = null;

    /**
     * @var string $CasusFase
     */
    protected $CasusFase = null;

    /**
     * @var TrajectSoortArray $Trajecten
     */
    protected $Trajecten = null;

    /**
     * @var BBRVormArray $BBRVorm
     */
    protected $BBRVorm = null;

    /**
     * @param int $Relatiecode
     * @param string $Zoeknaam
     * @param \DateTime $GeboorteDatum
     * @param int $BSN
     * @param TAdres $Adres
     * @param int $CasusVolgnummer
     * @param int $AanvraagSRVolgnummer
     * @param int $SRVolgnummer
     * @param int $AanvraagBBRVolgnummer
     * @param int $BBRVolgnummer
     * @param boolean $CasusCrisis
     * @param string $CasusFase
     * @param TrajectSoortArray $Trajecten
     * @param BBRVormArray $BBRVorm
     */
    public function __construct($Relatiecode, $Zoeknaam, \DateTime $GeboorteDatum, $BSN, $Adres, $CasusVolgnummer, $AanvraagSRVolgnummer, $SRVolgnummer, $AanvraagBBRVolgnummer, $BBRVolgnummer, $CasusCrisis, $CasusFase, $Trajecten, $BBRVorm)
    {
      $this->Relatiecode = $Relatiecode;
      $this->Zoeknaam = $Zoeknaam;
      $this->GeboorteDatum = $GeboorteDatum->format(\DateTime::ATOM);
      $this->BSN = $BSN;
      $this->Adres = $Adres;
      $this->CasusVolgnummer = $CasusVolgnummer;
      $this->AanvraagSRVolgnummer = $AanvraagSRVolgnummer;
      $this->SRVolgnummer = $SRVolgnummer;
      $this->AanvraagBBRVolgnummer = $AanvraagBBRVolgnummer;
      $this->BBRVolgnummer = $BBRVolgnummer;
      $this->CasusCrisis = $CasusCrisis;
      $this->CasusFase = $CasusFase;
      $this->Trajecten = $Trajecten;
      $this->BBRVorm = $BBRVorm;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
    }

    /**
     * @return string
     */
    public function getZoeknaam()
    {
      return $this->Zoeknaam;
    }

    /**
     * @param string $Zoeknaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setZoeknaam($Zoeknaam)
    {
      $this->Zoeknaam = $Zoeknaam;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeboorteDatum()
    {
      if ($this->GeboorteDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->GeboorteDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $GeboorteDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setGeboorteDatum(\DateTime $GeboorteDatum)
    {
      $this->GeboorteDatum = $GeboorteDatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getBSN()
    {
      return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setBSN($BSN)
    {
      $this->BSN = $BSN;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getAdres()
    {
      return $this->Adres;
    }

    /**
     * @param TAdres $Adres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setAdres($Adres)
    {
      $this->Adres = $Adres;
      return $this;
    }

    /**
     * @return int
     */
    public function getCasusVolgnummer()
    {
      return $this->CasusVolgnummer;
    }

    /**
     * @param int $CasusVolgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setCasusVolgnummer($CasusVolgnummer)
    {
      $this->CasusVolgnummer = $CasusVolgnummer;
      return $this;
    }

    /**
     * @return int
     */
    public function getAanvraagSRVolgnummer()
    {
      return $this->AanvraagSRVolgnummer;
    }

    /**
     * @param int $AanvraagSRVolgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setAanvraagSRVolgnummer($AanvraagSRVolgnummer)
    {
      $this->AanvraagSRVolgnummer = $AanvraagSRVolgnummer;
      return $this;
    }

    /**
     * @return int
     */
    public function getSRVolgnummer()
    {
      return $this->SRVolgnummer;
    }

    /**
     * @param int $SRVolgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setSRVolgnummer($SRVolgnummer)
    {
      $this->SRVolgnummer = $SRVolgnummer;
      return $this;
    }

    /**
     * @return int
     */
    public function getAanvraagBBRVolgnummer()
    {
      return $this->AanvraagBBRVolgnummer;
    }

    /**
     * @param int $AanvraagBBRVolgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setAanvraagBBRVolgnummer($AanvraagBBRVolgnummer)
    {
      $this->AanvraagBBRVolgnummer = $AanvraagBBRVolgnummer;
      return $this;
    }

    /**
     * @return int
     */
    public function getBBRVolgnummer()
    {
      return $this->BBRVolgnummer;
    }

    /**
     * @param int $BBRVolgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setBBRVolgnummer($BBRVolgnummer)
    {
      $this->BBRVolgnummer = $BBRVolgnummer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCasusCrisis()
    {
      return $this->CasusCrisis;
    }

    /**
     * @param boolean $CasusCrisis
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setCasusCrisis($CasusCrisis)
    {
      $this->CasusCrisis = $CasusCrisis;
      return $this;
    }

    /**
     * @return string
     */
    public function getCasusFase()
    {
      return $this->CasusFase;
    }

    /**
     * @param string $CasusFase
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setCasusFase($CasusFase)
    {
      $this->CasusFase = $CasusFase;
      return $this;
    }

    /**
     * @return TrajectSoortArray
     */
    public function getTrajecten()
    {
      return $this->Trajecten;
    }

    /**
     * @param TrajectSoortArray $Trajecten
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setTrajecten($Trajecten)
    {
      $this->Trajecten = $Trajecten;
      return $this;
    }

    /**
     * @return BBRVormArray
     */
    public function getBBRVorm()
    {
      return $this->BBRVorm;
    }

    /**
     * @param BBRVormArray $BBRVorm
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpdrachtgeverKlant
     */
    public function setBBRVorm($BBRVorm)
    {
      $this->BBRVorm = $BBRVorm;
      return $this;
    }

}
