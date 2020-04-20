<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TSBEiser
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
     * @var float $TeruggemeldBedrag
     */
    protected $TeruggemeldBedrag = null;

    /**
     * @var float $BerekendBedrag
     */
    protected $BerekendBedrag = null;

    /**
     * @var float $GereserveerdBedrag
     */
    protected $GereserveerdBedrag = null;

    /**
     * @var float $DoorbetaaldBedrag
     */
    protected $DoorbetaaldBedrag = null;

    /**
     * @var float $PrognoseRestschuld
     */
    protected $PrognoseRestschuld = null;

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
     * @param float $TeruggemeldBedrag
     * @param float $BerekendBedrag
     * @param float $GereserveerdBedrag
     * @param float $DoorbetaaldBedrag
     * @param float $PrognoseRestschuld
     * @param int $CodeIncasso
     * @param string $NaamIncasso
     * @param string $ReferentieIncasso
     * @param int $CodeDeurwaarder
     * @param string $NaamDeurwaarder
     * @param string $ReferentieDeurwaarder
     */
    public function __construct($RelatieCode, $Volgnummer, $CodeEiser, $NaamEiser, $UniekVolgnummer, $Referentie, $TeruggemeldBedrag, $BerekendBedrag, $GereserveerdBedrag, $DoorbetaaldBedrag, $PrognoseRestschuld, $CodeIncasso, $NaamIncasso, $ReferentieIncasso, $CodeDeurwaarder, $NaamDeurwaarder, $ReferentieDeurwaarder)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Volgnummer = $Volgnummer;
      $this->CodeEiser = $CodeEiser;
      $this->NaamEiser = $NaamEiser;
      $this->UniekVolgnummer = $UniekVolgnummer;
      $this->Referentie = $Referentie;
      $this->TeruggemeldBedrag = $TeruggemeldBedrag;
      $this->BerekendBedrag = $BerekendBedrag;
      $this->GereserveerdBedrag = $GereserveerdBedrag;
      $this->DoorbetaaldBedrag = $DoorbetaaldBedrag;
      $this->PrognoseRestschuld = $PrognoseRestschuld;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
     */
    public function setReferentie($Referentie)
    {
      $this->Referentie = $Referentie;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
     */
    public function setTeruggemeldBedrag($TeruggemeldBedrag)
    {
      $this->TeruggemeldBedrag = $TeruggemeldBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getBerekendBedrag()
    {
      return $this->BerekendBedrag;
    }

    /**
     * @param float $BerekendBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
     */
    public function setBerekendBedrag($BerekendBedrag)
    {
      $this->BerekendBedrag = $BerekendBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getGereserveerdBedrag()
    {
      return $this->GereserveerdBedrag;
    }

    /**
     * @param float $GereserveerdBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
     */
    public function setGereserveerdBedrag($GereserveerdBedrag)
    {
      $this->GereserveerdBedrag = $GereserveerdBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getDoorbetaaldBedrag()
    {
      return $this->DoorbetaaldBedrag;
    }

    /**
     * @param float $DoorbetaaldBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
     */
    public function setDoorbetaaldBedrag($DoorbetaaldBedrag)
    {
      $this->DoorbetaaldBedrag = $DoorbetaaldBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrognoseRestschuld()
    {
      return $this->PrognoseRestschuld;
    }

    /**
     * @param float $PrognoseRestschuld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
     */
    public function setPrognoseRestschuld($PrognoseRestschuld)
    {
      $this->PrognoseRestschuld = $PrognoseRestschuld;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSBEiser
     */
    public function setReferentieDeurwaarder($ReferentieDeurwaarder)
    {
      $this->ReferentieDeurwaarder = $ReferentieDeurwaarder;
      return $this;
    }

}
