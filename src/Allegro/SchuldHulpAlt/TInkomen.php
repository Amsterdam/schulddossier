<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TInkomen
{

    /**
     * @var eSoortInkomen $SoortInkomen
     */
    protected $SoortInkomen = null;

    /**
     * @var string $Beroep
     */
    protected $Beroep = null;

    /**
     * @var string $Werkgever
     */
    protected $Werkgever = null;

    /**
     * @var int $WerkzaamSinds
     */
    protected $WerkzaamSinds = null;

    /**
     * @var eJaNeeLeeg $VastDienstverband
     */
    protected $VastDienstverband = null;

    /**
     * @var int $DienstVerbandTot
     */
    protected $DienstVerbandTot = null;

    /**
     * @var float $Loon
     */
    protected $Loon = null;

    /**
     * @var ePeriode $LoonPeriode
     */
    protected $LoonPeriode = null;

    /**
     * @var string $SoortUitkering
     */
    protected $SoortUitkering = null;

    /**
     * @var string $UitkeringsInstantie
     */
    protected $UitkeringsInstantie = null;

    /**
     * @var float $Uitkering
     */
    protected $Uitkering = null;

    /**
     * @var ePeriode $UitkeringPeriode
     */
    protected $UitkeringPeriode = null;

    /**
     * @var float $Pensioen
     */
    protected $Pensioen = null;

    /**
     * @var ePeriode $PensioenPeriode
     */
    protected $PensioenPeriode = null;

    /**
     * @var float $KGB
     */
    protected $KGB = null;

    /**
     * @var float $Vrijwilligers
     */
    protected $Vrijwilligers = null;

    /**
     * @var ePeriode $VrijwilligersPeriode
     */
    protected $VrijwilligersPeriode = null;

    /**
     * @var float $KinderAlimentatieBedrag
     */
    protected $KinderAlimentatieBedrag = null;

    /**
     * @var float $PartnerAlimentatieBedrag
     */
    protected $PartnerAlimentatieBedrag = null;

    /**
     * @var string $OverigInkomen
     */
    protected $OverigInkomen = null;

    /**
     * @var float $OverigInkomenBedrag
     */
    protected $OverigInkomenBedrag = null;

    /**
     * @var ePeriode $OverigInkomenPeriode
     */
    protected $OverigInkomenPeriode = null;

    /**
     * @var string $Toelichting
     */
    protected $Toelichting = null;

    /**
     * @param eSoortInkomen $SoortInkomen
     * @param int $WerkzaamSinds
     * @param int $DienstVerbandTot
     * @param float $Loon
     * @param float $Uitkering
     * @param float $Pensioen
     * @param float $KGB
     * @param float $Vrijwilligers
     * @param float $KinderAlimentatieBedrag
     * @param float $PartnerAlimentatieBedrag
     * @param float $OverigInkomenBedrag
     */
    public function __construct($SoortInkomen, $WerkzaamSinds, $DienstVerbandTot, $Loon, $Uitkering, $Pensioen, $KGB, $Vrijwilligers, $KinderAlimentatieBedrag, $PartnerAlimentatieBedrag, $OverigInkomenBedrag)
    {
      $this->SoortInkomen = $SoortInkomen;
      $this->WerkzaamSinds = $WerkzaamSinds;
      $this->DienstVerbandTot = $DienstVerbandTot;
      $this->Loon = $Loon;
      $this->Uitkering = $Uitkering;
      $this->Pensioen = $Pensioen;
      $this->KGB = $KGB;
      $this->Vrijwilligers = $Vrijwilligers;
      $this->KinderAlimentatieBedrag = $KinderAlimentatieBedrag;
      $this->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;
      $this->OverigInkomenBedrag = $OverigInkomenBedrag;
    }

    /**
     * @return eSoortInkomen
     */
    public function getSoortInkomen()
    {
      return $this->SoortInkomen;
    }

    /**
     * @param eSoortInkomen $SoortInkomen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setSoortInkomen($SoortInkomen)
    {
      $this->SoortInkomen = $SoortInkomen;
      return $this;
    }

    /**
     * @return string
     */
    public function getBeroep()
    {
      return $this->Beroep;
    }

    /**
     * @param string $Beroep
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setBeroep($Beroep)
    {
      $this->Beroep = $Beroep;
      return $this;
    }

    /**
     * @return string
     */
    public function getWerkgever()
    {
      return $this->Werkgever;
    }

    /**
     * @param string $Werkgever
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setWerkgever($Werkgever)
    {
      $this->Werkgever = $Werkgever;
      return $this;
    }

    /**
     * @return int
     */
    public function getWerkzaamSinds()
    {
      return $this->WerkzaamSinds;
    }

    /**
     * @param int $WerkzaamSinds
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setWerkzaamSinds($WerkzaamSinds)
    {
      $this->WerkzaamSinds = $WerkzaamSinds;
      return $this;
    }

    /**
     * @return eJaNeeLeeg
     */
    public function getVastDienstverband()
    {
      return $this->VastDienstverband;
    }

    /**
     * @param eJaNeeLeeg $VastDienstverband
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setVastDienstverband($VastDienstverband)
    {
      $this->VastDienstverband = $VastDienstverband;
      return $this;
    }

    /**
     * @return int
     */
    public function getDienstVerbandTot()
    {
      return $this->DienstVerbandTot;
    }

    /**
     * @param int $DienstVerbandTot
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setDienstVerbandTot($DienstVerbandTot)
    {
      $this->DienstVerbandTot = $DienstVerbandTot;
      return $this;
    }

    /**
     * @return float
     */
    public function getLoon()
    {
      return $this->Loon;
    }

    /**
     * @param float $Loon
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setLoon($Loon)
    {
      $this->Loon = $Loon;
      return $this;
    }

    /**
     * @return ePeriode
     */
    public function getLoonPeriode()
    {
      return $this->LoonPeriode;
    }

    /**
     * @param ePeriode $LoonPeriode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setLoonPeriode($LoonPeriode)
    {
      $this->LoonPeriode = $LoonPeriode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoortUitkering()
    {
      return $this->SoortUitkering;
    }

    /**
     * @param string $SoortUitkering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setSoortUitkering($SoortUitkering)
    {
      $this->SoortUitkering = $SoortUitkering;
      return $this;
    }

    /**
     * @return string
     */
    public function getUitkeringsInstantie()
    {
      return $this->UitkeringsInstantie;
    }

    /**
     * @param string $UitkeringsInstantie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setUitkeringsInstantie($UitkeringsInstantie)
    {
      $this->UitkeringsInstantie = $UitkeringsInstantie;
      return $this;
    }

    /**
     * @return float
     */
    public function getUitkering()
    {
      return $this->Uitkering;
    }

    /**
     * @param float $Uitkering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setUitkering($Uitkering)
    {
      $this->Uitkering = $Uitkering;
      return $this;
    }

    /**
     * @return ePeriode
     */
    public function getUitkeringPeriode()
    {
      return $this->UitkeringPeriode;
    }

    /**
     * @param ePeriode $UitkeringPeriode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setUitkeringPeriode($UitkeringPeriode)
    {
      $this->UitkeringPeriode = $UitkeringPeriode;
      return $this;
    }

    /**
     * @return float
     */
    public function getPensioen()
    {
      return $this->Pensioen;
    }

    /**
     * @param float $Pensioen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setPensioen($Pensioen)
    {
      $this->Pensioen = $Pensioen;
      return $this;
    }

    /**
     * @return ePeriode
     */
    public function getPensioenPeriode()
    {
      return $this->PensioenPeriode;
    }

    /**
     * @param ePeriode $PensioenPeriode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setPensioenPeriode($PensioenPeriode)
    {
      $this->PensioenPeriode = $PensioenPeriode;
      return $this;
    }

    /**
     * @return float
     */
    public function getKGB()
    {
      return $this->KGB;
    }

    /**
     * @param float $KGB
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setKGB($KGB)
    {
      $this->KGB = $KGB;
      return $this;
    }

    /**
     * @return float
     */
    public function getVrijwilligers()
    {
      return $this->Vrijwilligers;
    }

    /**
     * @param float $Vrijwilligers
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setVrijwilligers($Vrijwilligers)
    {
      $this->Vrijwilligers = $Vrijwilligers;
      return $this;
    }

    /**
     * @return ePeriode
     */
    public function getVrijwilligersPeriode()
    {
      return $this->VrijwilligersPeriode;
    }

    /**
     * @param ePeriode $VrijwilligersPeriode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setVrijwilligersPeriode($VrijwilligersPeriode)
    {
      $this->VrijwilligersPeriode = $VrijwilligersPeriode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setPartnerAlimentatieBedrag($PartnerAlimentatieBedrag)
    {
      $this->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;
      return $this;
    }

    /**
     * @return string
     */
    public function getOverigInkomen()
    {
      return $this->OverigInkomen;
    }

    /**
     * @param string $OverigInkomen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setOverigInkomen($OverigInkomen)
    {
      $this->OverigInkomen = $OverigInkomen;
      return $this;
    }

    /**
     * @return float
     */
    public function getOverigInkomenBedrag()
    {
      return $this->OverigInkomenBedrag;
    }

    /**
     * @param float $OverigInkomenBedrag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setOverigInkomenBedrag($OverigInkomenBedrag)
    {
      $this->OverigInkomenBedrag = $OverigInkomenBedrag;
      return $this;
    }

    /**
     * @return ePeriode
     */
    public function getOverigInkomenPeriode()
    {
      return $this->OverigInkomenPeriode;
    }

    /**
     * @param ePeriode $OverigInkomenPeriode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setOverigInkomenPeriode($OverigInkomenPeriode)
    {
      $this->OverigInkomenPeriode = $OverigInkomenPeriode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen
     */
    public function setToelichting($Toelichting)
    {
      $this->Toelichting = $Toelichting;
      return $this;
    }

}
