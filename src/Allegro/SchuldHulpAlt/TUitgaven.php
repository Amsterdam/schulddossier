<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TUitgaven
{

    /**
     * @var eWoningSoort $WoningSoort
     */
    protected $WoningSoort = null;

    /**
     * @var float $Kostgeld
     */
    protected $Kostgeld = null;

    /**
     * @var float $Huur
     */
    protected $Huur = null;

    /**
     * @var float $Huurtoeslag
     */
    protected $Huurtoeslag = null;

    /**
     * @var float $MaandHypotheek
     */
    protected $MaandHypotheek = null;

    /**
     * @var float $MaandTeruggave
     */
    protected $MaandTeruggave = null;

    /**
     * @var float $SaldoHypotheek
     */
    protected $SaldoHypotheek = null;

    /**
     * @var float $WOZWaarde
     */
    protected $WOZWaarde = null;

    /**
     * @var float $Zorgpremie
     */
    protected $Zorgpremie = null;

    /**
     * @var float $Zorgtoeslag
     */
    protected $Zorgtoeslag = null;

    /**
     * @var float $KinderAlimentatieBedrag
     */
    protected $KinderAlimentatieBedrag = null;

    /**
     * @var float $PartnerAlimentatieBedrag
     */
    protected $PartnerAlimentatieBedrag = null;

    /**
     * @var string $OverigUitgaven
     */
    protected $OverigUitgaven = null;

    /**
     * @var string $Toelichting
     */
    protected $Toelichting = null;

    /**
     * @param eWoningSoort $WoningSoort
     * @param float $Kostgeld
     * @param float $Huur
     * @param float $Huurtoeslag
     * @param float $MaandHypotheek
     * @param float $MaandTeruggave
     * @param float $SaldoHypotheek
     * @param float $WOZWaarde
     * @param float $Zorgpremie
     * @param float $Zorgtoeslag
     * @param float $KinderAlimentatieBedrag
     * @param float $PartnerAlimentatieBedrag
     * @param string $OverigUitgaven
     * @param string $Toelichting
     */
    public function __construct($WoningSoort, $Kostgeld, $Huur, $Huurtoeslag, $MaandHypotheek, $MaandTeruggave, $SaldoHypotheek, $WOZWaarde, $Zorgpremie, $Zorgtoeslag, $KinderAlimentatieBedrag, $PartnerAlimentatieBedrag, $OverigUitgaven, $Toelichting)
    {
      $this->WoningSoort = $WoningSoort;
      $this->Kostgeld = $Kostgeld;
      $this->Huur = $Huur;
      $this->Huurtoeslag = $Huurtoeslag;
      $this->MaandHypotheek = $MaandHypotheek;
      $this->MaandTeruggave = $MaandTeruggave;
      $this->SaldoHypotheek = $SaldoHypotheek;
      $this->WOZWaarde = $WOZWaarde;
      $this->Zorgpremie = $Zorgpremie;
      $this->Zorgtoeslag = $Zorgtoeslag;
      $this->KinderAlimentatieBedrag = $KinderAlimentatieBedrag;
      $this->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;
      $this->OverigUitgaven = $OverigUitgaven;
      $this->Toelichting = $Toelichting;
    }

    /**
     * @return eWoningSoort
     */
    public function getWoningSoort()
    {
      return $this->WoningSoort;
    }

    /**
     * @param eWoningSoort $WoningSoort
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setWoningSoort($WoningSoort)
    {
      $this->WoningSoort = $WoningSoort;
      return $this;
    }

    /**
     * @return float
     */
    public function getKostgeld()
    {
      return $this->Kostgeld;
    }

    /**
     * @param float $Kostgeld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setKostgeld($Kostgeld)
    {
      $this->Kostgeld = $Kostgeld;
      return $this;
    }

    /**
     * @return float
     */
    public function getHuur()
    {
      return $this->Huur;
    }

    /**
     * @param float $Huur
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setHuur($Huur)
    {
      $this->Huur = $Huur;
      return $this;
    }

    /**
     * @return float
     */
    public function getHuurtoeslag()
    {
      return $this->Huurtoeslag;
    }

    /**
     * @param float $Huurtoeslag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setHuurtoeslag($Huurtoeslag)
    {
      $this->Huurtoeslag = $Huurtoeslag;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaandHypotheek()
    {
      return $this->MaandHypotheek;
    }

    /**
     * @param float $MaandHypotheek
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setMaandHypotheek($MaandHypotheek)
    {
      $this->MaandHypotheek = $MaandHypotheek;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaandTeruggave()
    {
      return $this->MaandTeruggave;
    }

    /**
     * @param float $MaandTeruggave
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setMaandTeruggave($MaandTeruggave)
    {
      $this->MaandTeruggave = $MaandTeruggave;
      return $this;
    }

    /**
     * @return float
     */
    public function getSaldoHypotheek()
    {
      return $this->SaldoHypotheek;
    }

    /**
     * @param float $SaldoHypotheek
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setSaldoHypotheek($SaldoHypotheek)
    {
      $this->SaldoHypotheek = $SaldoHypotheek;
      return $this;
    }

    /**
     * @return float
     */
    public function getWOZWaarde()
    {
      return $this->WOZWaarde;
    }

    /**
     * @param float $WOZWaarde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setWOZWaarde($WOZWaarde)
    {
      $this->WOZWaarde = $WOZWaarde;
      return $this;
    }

    /**
     * @return float
     */
    public function getZorgpremie()
    {
      return $this->Zorgpremie;
    }

    /**
     * @param float $Zorgpremie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setZorgpremie($Zorgpremie)
    {
      $this->Zorgpremie = $Zorgpremie;
      return $this;
    }

    /**
     * @return float
     */
    public function getZorgtoeslag()
    {
      return $this->Zorgtoeslag;
    }

    /**
     * @param float $Zorgtoeslag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setZorgtoeslag($Zorgtoeslag)
    {
      $this->Zorgtoeslag = $Zorgtoeslag;
      return $this;
    }

    /**
     * @return float
     */
    public function getKinderAlimentatieBedrag()
    {
      return $this->KinderAlimentatieBedrag;
    }

    /**
     * @param float $KinderAlimentatieBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setKinderAlimentatieBedrag($KinderAlimentatieBedrag)
    {
      $this->KinderAlimentatieBedrag = $KinderAlimentatieBedrag;
      return $this;
    }

    /**
     * @return float
     */
    public function getPartnerAlimentatieBedrag()
    {
      return $this->PartnerAlimentatieBedrag;
    }

    /**
     * @param float $PartnerAlimentatieBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setPartnerAlimentatieBedrag($PartnerAlimentatieBedrag)
    {
      $this->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;
      return $this;
    }

    /**
     * @return string
     */
    public function getOverigUitgaven()
    {
      return $this->OverigUitgaven;
    }

    /**
     * @param string $OverigUitgaven
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setOverigUitgaven($OverigUitgaven)
    {
      $this->OverigUitgaven = $OverigUitgaven;
      return $this;
    }

    /**
     * @return string
     */
    public function getToelichting()
    {
      return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TUitgaven
     */
    public function setToelichting($Toelichting)
    {
      $this->Toelichting = $Toelichting;
      return $this;
    }

}
