<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TInkomen
{
    /**
     * @var string
     */
    private $SoortInkomen;

    /**
     * @var string
     */
    private $Beroep;

    /**
     * @var string
     */
    private $Werkgever;

    /**
     * @var int
     */
    private $WerkzaamSinds;

    /**
     * @var string
     */
    private $VastDienstverband;

    /**
     * @var int
     */
    private $DienstVerbandTot;

    /**
     * @var float
     */
    private $Loon;

    /**
     * @var string
     */
    private $LoonPeriode;

    /**
     * @var string
     */
    private $SoortUitkering;

    /**
     * @var string
     */
    private $UitkeringsInstantie;

    /**
     * @var float
     */
    private $Uitkering;

    /**
     * @var string
     */
    private $UitkeringPeriode;

    /**
     * @var float
     */
    private $Pensioen;

    /**
     * @var string
     */
    private $PensioenPeriode;

    /**
     * @var float
     */
    private $KGB;

    /**
     * @var float
     */
    private $Vrijwilligers;

    /**
     * @var string
     */
    private $VrijwilligersPeriode;

    /**
     * @var float
     */
    private $KinderAlimentatieBedrag;

    /**
     * @var float
     */
    private $PartnerAlimentatieBedrag;

    /**
     * @var string
     */
    private $OverigInkomen;

    /**
     * @var float
     */
    private $OverigInkomenBedrag;

    /**
     * @var string
     */
    private $OverigInkomenPeriode;

    /**
     * @var string
     */
    private $Toelichting;

    /**
     * @return string
     */
    public function getSoortInkomen()
    {
        return $this->SoortInkomen;
    }

    /**
     * @param string $SoortInkomen
     * @return TInkomen
     */
    public function withSoortInkomen($SoortInkomen)
    {
        $new = clone $this;
        $new->SoortInkomen = $SoortInkomen;

        return $new;
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
     * @return TInkomen
     */
    public function withBeroep($Beroep)
    {
        $new = clone $this;
        $new->Beroep = $Beroep;

        return $new;
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
     * @return TInkomen
     */
    public function withWerkgever($Werkgever)
    {
        $new = clone $this;
        $new->Werkgever = $Werkgever;

        return $new;
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
     * @return TInkomen
     */
    public function withWerkzaamSinds($WerkzaamSinds)
    {
        $new = clone $this;
        $new->WerkzaamSinds = $WerkzaamSinds;

        return $new;
    }

    /**
     * @return string
     */
    public function getVastDienstverband()
    {
        return $this->VastDienstverband;
    }

    /**
     * @param string $VastDienstverband
     * @return TInkomen
     */
    public function withVastDienstverband($VastDienstverband)
    {
        $new = clone $this;
        $new->VastDienstverband = $VastDienstverband;

        return $new;
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
     * @return TInkomen
     */
    public function withDienstVerbandTot($DienstVerbandTot)
    {
        $new = clone $this;
        $new->DienstVerbandTot = $DienstVerbandTot;

        return $new;
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
     * @return TInkomen
     */
    public function withLoon($Loon)
    {
        $new = clone $this;
        $new->Loon = $Loon;

        return $new;
    }

    /**
     * @return string
     */
    public function getLoonPeriode()
    {
        return $this->LoonPeriode;
    }

    /**
     * @param string $LoonPeriode
     * @return TInkomen
     */
    public function withLoonPeriode($LoonPeriode)
    {
        $new = clone $this;
        $new->LoonPeriode = $LoonPeriode;

        return $new;
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
     * @return TInkomen
     */
    public function withSoortUitkering($SoortUitkering)
    {
        $new = clone $this;
        $new->SoortUitkering = $SoortUitkering;

        return $new;
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
     * @return TInkomen
     */
    public function withUitkeringsInstantie($UitkeringsInstantie)
    {
        $new = clone $this;
        $new->UitkeringsInstantie = $UitkeringsInstantie;

        return $new;
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
     * @return TInkomen
     */
    public function withUitkering($Uitkering)
    {
        $new = clone $this;
        $new->Uitkering = $Uitkering;

        return $new;
    }

    /**
     * @return string
     */
    public function getUitkeringPeriode()
    {
        return $this->UitkeringPeriode;
    }

    /**
     * @param string $UitkeringPeriode
     * @return TInkomen
     */
    public function withUitkeringPeriode($UitkeringPeriode)
    {
        $new = clone $this;
        $new->UitkeringPeriode = $UitkeringPeriode;

        return $new;
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
     * @return TInkomen
     */
    public function withPensioen($Pensioen)
    {
        $new = clone $this;
        $new->Pensioen = $Pensioen;

        return $new;
    }

    /**
     * @return string
     */
    public function getPensioenPeriode()
    {
        return $this->PensioenPeriode;
    }

    /**
     * @param string $PensioenPeriode
     * @return TInkomen
     */
    public function withPensioenPeriode($PensioenPeriode)
    {
        $new = clone $this;
        $new->PensioenPeriode = $PensioenPeriode;

        return $new;
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
     * @return TInkomen
     */
    public function withKGB($KGB)
    {
        $new = clone $this;
        $new->KGB = $KGB;

        return $new;
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
     * @return TInkomen
     */
    public function withVrijwilligers($Vrijwilligers)
    {
        $new = clone $this;
        $new->Vrijwilligers = $Vrijwilligers;

        return $new;
    }

    /**
     * @return string
     */
    public function getVrijwilligersPeriode()
    {
        return $this->VrijwilligersPeriode;
    }

    /**
     * @param string $VrijwilligersPeriode
     * @return TInkomen
     */
    public function withVrijwilligersPeriode($VrijwilligersPeriode)
    {
        $new = clone $this;
        $new->VrijwilligersPeriode = $VrijwilligersPeriode;

        return $new;
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
     * @return TInkomen
     */
    public function withKinderAlimentatieBedrag($KinderAlimentatieBedrag)
    {
        $new = clone $this;
        $new->KinderAlimentatieBedrag = $KinderAlimentatieBedrag;

        return $new;
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
     * @return TInkomen
     */
    public function withPartnerAlimentatieBedrag($PartnerAlimentatieBedrag)
    {
        $new = clone $this;
        $new->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;

        return $new;
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
     * @return TInkomen
     */
    public function withOverigInkomen($OverigInkomen)
    {
        $new = clone $this;
        $new->OverigInkomen = $OverigInkomen;

        return $new;
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
     * @return TInkomen
     */
    public function withOverigInkomenBedrag($OverigInkomenBedrag)
    {
        $new = clone $this;
        $new->OverigInkomenBedrag = $OverigInkomenBedrag;

        return $new;
    }

    /**
     * @return string
     */
    public function getOverigInkomenPeriode()
    {
        return $this->OverigInkomenPeriode;
    }

    /**
     * @param string $OverigInkomenPeriode
     * @return TInkomen
     */
    public function withOverigInkomenPeriode($OverigInkomenPeriode)
    {
        $new = clone $this;
        $new->OverigInkomenPeriode = $OverigInkomenPeriode;

        return $new;
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
     * @return TInkomen
     */
    public function withToelichting($Toelichting)
    {
        $new = clone $this;
        $new->Toelichting = $Toelichting;

        return $new;
    }
}

