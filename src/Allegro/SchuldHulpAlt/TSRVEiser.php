<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSRVEiser
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
     * @var int $CodeEiser
     */
    protected $CodeEiser = null;

    /**
     * @var string $NaamEiser
     */
    protected $NaamEiser = null;

    /**
     * @var int $UniekVolgnummer
     */
    protected $UniekVolgnummer = null;

    /**
     * @var string $Referentie
     */
    protected $Referentie = null;

    /**
     * @var float $AangemeldBedrag
     */
    protected $AangemeldBedrag = null;

    /**
     * @var float $TeruggemeldBedrag
     */
    protected $TeruggemeldBedrag = null;

    /**
     * @var float $PrognoseVoorstel
     */
    protected $PrognoseVoorstel = null;

    /**
     * @var string $TerugmeldingVoorstel
     */
    protected $TerugmeldingVoorstel = null;

    /**
     * @var \DateTime $DatumTerugmeldingVoorstel
     */
    protected $DatumTerugmeldingVoorstel = null;

    /**
     * @var string $IndicatieOpgaaf
     */
    protected $IndicatieOpgaaf = null;

    /**
     * @var string $IndicatieVoorstel
     */
    protected $IndicatieVoorstel = null;

    /**
     * @var boolean $IndicatieSK
     */
    protected $IndicatieSK = null;

    /**
     * @var int $CodeIncasso
     */
    protected $CodeIncasso = null;

    /**
     * @var string $NaamIncasso
     */
    protected $NaamIncasso = null;

    /**
     * @var string $ReferentieIncasso
     */
    protected $ReferentieIncasso = null;

    /**
     * @var int $CodeDeurwaarder
     */
    protected $CodeDeurwaarder = null;

    /**
     * @var string $NaamDeurwaarder
     */
    protected $NaamDeurwaarder = null;

    /**
     * @var string $ReferentieDeurwaarder
     */
    protected $ReferentieDeurwaarder = null;

    /**
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param int $CodeEiser
     * @param string $NaamEiser
     * @param int $UniekVolgnummer
     * @param string $Referentie
     * @param float $AangemeldBedrag
     * @param float $TeruggemeldBedrag
     * @param float $PrognoseVoorstel
     * @param string $TerugmeldingVoorstel
     * @param \DateTime $DatumTerugmeldingVoorstel
     * @param string $IndicatieOpgaaf
     * @param string $IndicatieVoorstel
     * @param boolean $IndicatieSK
     * @param int $CodeIncasso
     * @param string $NaamIncasso
     * @param string $ReferentieIncasso
     * @param int $CodeDeurwaarder
     * @param string $NaamDeurwaarder
     * @param string $ReferentieDeurwaarder
     */
    public function __construct($RelatieCode, $Volgnummer, $CodeEiser, $NaamEiser, $UniekVolgnummer, $Referentie, $AangemeldBedrag, $TeruggemeldBedrag, $PrognoseVoorstel, $TerugmeldingVoorstel, \DateTime $DatumTerugmeldingVoorstel, $IndicatieOpgaaf, $IndicatieVoorstel, $IndicatieSK, $CodeIncasso, $NaamIncasso, $ReferentieIncasso, $CodeDeurwaarder, $NaamDeurwaarder, $ReferentieDeurwaarder)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Volgnummer = $Volgnummer;
      $this->CodeEiser = $CodeEiser;
      $this->NaamEiser = $NaamEiser;
      $this->UniekVolgnummer = $UniekVolgnummer;
      $this->Referentie = $Referentie;
      $this->AangemeldBedrag = $AangemeldBedrag;
      $this->TeruggemeldBedrag = $TeruggemeldBedrag;
      $this->PrognoseVoorstel = $PrognoseVoorstel;
      $this->TerugmeldingVoorstel = $TerugmeldingVoorstel;
      $this->DatumTerugmeldingVoorstel = $DatumTerugmeldingVoorstel->format(\DateTime::ATOM);
      $this->IndicatieOpgaaf = $IndicatieOpgaaf;
      $this->IndicatieVoorstel = $IndicatieVoorstel;
      $this->IndicatieSK = $IndicatieSK;
      $this->CodeIncasso = $CodeIncasso;
      $this->NaamIncasso = $NaamIncasso;
      $this->ReferentieIncasso = $ReferentieIncasso;
      $this->CodeDeurwaarder = $CodeDeurwaarder;
      $this->NaamDeurwaarder = $NaamDeurwaarder;
      $this->ReferentieDeurwaarder = $ReferentieDeurwaarder;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodeEiser()
    {
      return $this->CodeEiser;
    }

    /**
     * @param int $CodeEiser
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setCodeEiser($CodeEiser)
    {
      $this->CodeEiser = $CodeEiser;
      return $this;
    }

    /**
     * @return string
     */
    public function getNaamEiser()
    {
      return $this->NaamEiser;
    }

    /**
     * @param string $NaamEiser
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setNaamEiser($NaamEiser)
    {
      $this->NaamEiser = $NaamEiser;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setUniekVolgnummer($UniekVolgnummer)
    {
      $this->UniekVolgnummer = $UniekVolgnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferentie()
    {
      return $this->Referentie;
    }

    /**
     * @param string $Referentie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setReferentie($Referentie)
    {
      $this->Referentie = $Referentie;
      return $this;
    }

    /**
     * @return float
     */
    public function getAangemeldBedrag()
    {
      return $this->AangemeldBedrag;
    }

    /**
     * @param float $AangemeldBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setAangemeldBedrag($AangemeldBedrag)
    {
      $this->AangemeldBedrag = $AangemeldBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getTeruggemeldBedrag()
    {
      return $this->TeruggemeldBedrag;
    }

    /**
     * @param float $TeruggemeldBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setTeruggemeldBedrag($TeruggemeldBedrag)
    {
      $this->TeruggemeldBedrag = $TeruggemeldBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrognoseVoorstel()
    {
      return $this->PrognoseVoorstel;
    }

    /**
     * @param float $PrognoseVoorstel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setPrognoseVoorstel($PrognoseVoorstel)
    {
      $this->PrognoseVoorstel = $PrognoseVoorstel;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerugmeldingVoorstel()
    {
      return $this->TerugmeldingVoorstel;
    }

    /**
     * @param string $TerugmeldingVoorstel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setTerugmeldingVoorstel($TerugmeldingVoorstel)
    {
      $this->TerugmeldingVoorstel = $TerugmeldingVoorstel;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumTerugmeldingVoorstel()
    {
      if ($this->DatumTerugmeldingVoorstel == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumTerugmeldingVoorstel);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumTerugmeldingVoorstel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setDatumTerugmeldingVoorstel(\DateTime $DatumTerugmeldingVoorstel)
    {
      $this->DatumTerugmeldingVoorstel = $DatumTerugmeldingVoorstel->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getIndicatieOpgaaf()
    {
      return $this->IndicatieOpgaaf;
    }

    /**
     * @param string $IndicatieOpgaaf
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setIndicatieOpgaaf($IndicatieOpgaaf)
    {
      $this->IndicatieOpgaaf = $IndicatieOpgaaf;
      return $this;
    }

    /**
     * @return string
     */
    public function getIndicatieVoorstel()
    {
      return $this->IndicatieVoorstel;
    }

    /**
     * @param string $IndicatieVoorstel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setIndicatieVoorstel($IndicatieVoorstel)
    {
      $this->IndicatieVoorstel = $IndicatieVoorstel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatieSK()
    {
      return $this->IndicatieSK;
    }

    /**
     * @param boolean $IndicatieSK
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setIndicatieSK($IndicatieSK)
    {
      $this->IndicatieSK = $IndicatieSK;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodeIncasso()
    {
      return $this->CodeIncasso;
    }

    /**
     * @param int $CodeIncasso
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setCodeIncasso($CodeIncasso)
    {
      $this->CodeIncasso = $CodeIncasso;
      return $this;
    }

    /**
     * @return string
     */
    public function getNaamIncasso()
    {
      return $this->NaamIncasso;
    }

    /**
     * @param string $NaamIncasso
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setNaamIncasso($NaamIncasso)
    {
      $this->NaamIncasso = $NaamIncasso;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferentieIncasso()
    {
      return $this->ReferentieIncasso;
    }

    /**
     * @param string $ReferentieIncasso
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setReferentieIncasso($ReferentieIncasso)
    {
      $this->ReferentieIncasso = $ReferentieIncasso;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodeDeurwaarder()
    {
      return $this->CodeDeurwaarder;
    }

    /**
     * @param int $CodeDeurwaarder
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setCodeDeurwaarder($CodeDeurwaarder)
    {
      $this->CodeDeurwaarder = $CodeDeurwaarder;
      return $this;
    }

    /**
     * @return string
     */
    public function getNaamDeurwaarder()
    {
      return $this->NaamDeurwaarder;
    }

    /**
     * @param string $NaamDeurwaarder
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setNaamDeurwaarder($NaamDeurwaarder)
    {
      $this->NaamDeurwaarder = $NaamDeurwaarder;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferentieDeurwaarder()
    {
      return $this->ReferentieDeurwaarder;
    }

    /**
     * @param string $ReferentieDeurwaarder
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSRVEiser
     */
    public function setReferentieDeurwaarder($ReferentieDeurwaarder)
    {
      $this->ReferentieDeurwaarder = $ReferentieDeurwaarder;
      return $this;
    }

}
