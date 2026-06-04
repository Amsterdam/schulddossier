<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TInkomen
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ESoortInkomen
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ESoortInkomen $SoortInkomen;

    /**
     * @var string
     */
    private string $Beroep;

    /**
     * @var string
     */
    private string $Werkgever;

    /**
     * @var int
     */
    private int $WerkzaamSinds;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg $VastDienstverband;

    /**
     * @var int
     */
    private int $DienstVerbandTot;

    /**
     * @var float
     */
    private float $Loon;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $LoonPeriode;

    /**
     * @var string
     */
    private string $SoortUitkering;

    /**
     * @var string
     */
    private string $UitkeringsInstantie;

    /**
     * @var float
     */
    private float $Uitkering;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $UitkeringPeriode;

    /**
     * @var float
     */
    private float $Pensioen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $PensioenPeriode;

    /**
     * @var float
     */
    private float $KGB;

    /**
     * @var float
     */
    private float $Vrijwilligers;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $VrijwilligersPeriode;

    /**
     * @var float
     */
    private float $KinderAlimentatieBedrag;

    /**
     * @var float
     */
    private float $PartnerAlimentatieBedrag;

    /**
     * @var string
     */
    private string $OverigInkomen;

    /**
     * @var float
     */
    private float $OverigInkomenBedrag;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $OverigInkomenPeriode;

    /**
     * @var string
     */
    private string $Toelichting;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ESoortInkomen
     */
    public function getSoortInkomen(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ESoortInkomen
    {
        return $this->SoortInkomen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ESoortInkomen $SoortInkomen
     * @return static
     */
    public function withSoortInkomen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ESoortInkomen $SoortInkomen): static
    {
        $new = clone $this;
        $new->SoortInkomen = $SoortInkomen;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeroep(): string
    {
        return $this->Beroep;
    }

    /**
     * @param string $Beroep
     * @return static
     */
    public function withBeroep(string $Beroep): static
    {
        $new = clone $this;
        $new->Beroep = $Beroep;

        return $new;
    }

    /**
     * @return string
     */
    public function getWerkgever(): string
    {
        return $this->Werkgever;
    }

    /**
     * @param string $Werkgever
     * @return static
     */
    public function withWerkgever(string $Werkgever): static
    {
        $new = clone $this;
        $new->Werkgever = $Werkgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getWerkzaamSinds(): int
    {
        return $this->WerkzaamSinds;
    }

    /**
     * @param int $WerkzaamSinds
     * @return static
     */
    public function withWerkzaamSinds(int $WerkzaamSinds): static
    {
        $new = clone $this;
        $new->WerkzaamSinds = $WerkzaamSinds;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg
     */
    public function getVastDienstverband(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg
    {
        return $this->VastDienstverband;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg $VastDienstverband
     * @return static
     */
    public function withVastDienstverband(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg $VastDienstverband): static
    {
        $new = clone $this;
        $new->VastDienstverband = $VastDienstverband;

        return $new;
    }

    /**
     * @return int
     */
    public function getDienstVerbandTot(): int
    {
        return $this->DienstVerbandTot;
    }

    /**
     * @param int $DienstVerbandTot
     * @return static
     */
    public function withDienstVerbandTot(int $DienstVerbandTot): static
    {
        $new = clone $this;
        $new->DienstVerbandTot = $DienstVerbandTot;

        return $new;
    }

    /**
     * @return float
     */
    public function getLoon(): float
    {
        return $this->Loon;
    }

    /**
     * @param float $Loon
     * @return static
     */
    public function withLoon(float $Loon): static
    {
        $new = clone $this;
        $new->Loon = $Loon;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    public function getLoonPeriode(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
    {
        return $this->LoonPeriode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $LoonPeriode
     * @return static
     */
    public function withLoonPeriode(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $LoonPeriode): static
    {
        $new = clone $this;
        $new->LoonPeriode = $LoonPeriode;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortUitkering(): string
    {
        return $this->SoortUitkering;
    }

    /**
     * @param string $SoortUitkering
     * @return static
     */
    public function withSoortUitkering(string $SoortUitkering): static
    {
        $new = clone $this;
        $new->SoortUitkering = $SoortUitkering;

        return $new;
    }

    /**
     * @return string
     */
    public function getUitkeringsInstantie(): string
    {
        return $this->UitkeringsInstantie;
    }

    /**
     * @param string $UitkeringsInstantie
     * @return static
     */
    public function withUitkeringsInstantie(string $UitkeringsInstantie): static
    {
        $new = clone $this;
        $new->UitkeringsInstantie = $UitkeringsInstantie;

        return $new;
    }

    /**
     * @return float
     */
    public function getUitkering(): float
    {
        return $this->Uitkering;
    }

    /**
     * @param float $Uitkering
     * @return static
     */
    public function withUitkering(float $Uitkering): static
    {
        $new = clone $this;
        $new->Uitkering = $Uitkering;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    public function getUitkeringPeriode(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
    {
        return $this->UitkeringPeriode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $UitkeringPeriode
     * @return static
     */
    public function withUitkeringPeriode(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $UitkeringPeriode): static
    {
        $new = clone $this;
        $new->UitkeringPeriode = $UitkeringPeriode;

        return $new;
    }

    /**
     * @return float
     */
    public function getPensioen(): float
    {
        return $this->Pensioen;
    }

    /**
     * @param float $Pensioen
     * @return static
     */
    public function withPensioen(float $Pensioen): static
    {
        $new = clone $this;
        $new->Pensioen = $Pensioen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    public function getPensioenPeriode(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
    {
        return $this->PensioenPeriode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $PensioenPeriode
     * @return static
     */
    public function withPensioenPeriode(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $PensioenPeriode): static
    {
        $new = clone $this;
        $new->PensioenPeriode = $PensioenPeriode;

        return $new;
    }

    /**
     * @return float
     */
    public function getKGB(): float
    {
        return $this->KGB;
    }

    /**
     * @param float $KGB
     * @return static
     */
    public function withKGB(float $KGB): static
    {
        $new = clone $this;
        $new->KGB = $KGB;

        return $new;
    }

    /**
     * @return float
     */
    public function getVrijwilligers(): float
    {
        return $this->Vrijwilligers;
    }

    /**
     * @param float $Vrijwilligers
     * @return static
     */
    public function withVrijwilligers(float $Vrijwilligers): static
    {
        $new = clone $this;
        $new->Vrijwilligers = $Vrijwilligers;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    public function getVrijwilligersPeriode(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
    {
        return $this->VrijwilligersPeriode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $VrijwilligersPeriode
     * @return static
     */
    public function withVrijwilligersPeriode(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $VrijwilligersPeriode): static
    {
        $new = clone $this;
        $new->VrijwilligersPeriode = $VrijwilligersPeriode;

        return $new;
    }

    /**
     * @return float
     */
    public function getKinderAlimentatieBedrag(): float
    {
        return $this->KinderAlimentatieBedrag;
    }

    /**
     * @param float $KinderAlimentatieBedrag
     * @return static
     */
    public function withKinderAlimentatieBedrag(float $KinderAlimentatieBedrag): static
    {
        $new = clone $this;
        $new->KinderAlimentatieBedrag = $KinderAlimentatieBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getPartnerAlimentatieBedrag(): float
    {
        return $this->PartnerAlimentatieBedrag;
    }

    /**
     * @param float $PartnerAlimentatieBedrag
     * @return static
     */
    public function withPartnerAlimentatieBedrag(float $PartnerAlimentatieBedrag): static
    {
        $new = clone $this;
        $new->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;

        return $new;
    }

    /**
     * @return string
     */
    public function getOverigInkomen(): string
    {
        return $this->OverigInkomen;
    }

    /**
     * @param string $OverigInkomen
     * @return static
     */
    public function withOverigInkomen(string $OverigInkomen): static
    {
        $new = clone $this;
        $new->OverigInkomen = $OverigInkomen;

        return $new;
    }

    /**
     * @return float
     */
    public function getOverigInkomenBedrag(): float
    {
        return $this->OverigInkomenBedrag;
    }

    /**
     * @param float $OverigInkomenBedrag
     * @return static
     */
    public function withOverigInkomenBedrag(float $OverigInkomenBedrag): static
    {
        $new = clone $this;
        $new->OverigInkomenBedrag = $OverigInkomenBedrag;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
     */
    public function getOverigInkomenPeriode(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode
    {
        return $this->OverigInkomenPeriode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $OverigInkomenPeriode
     * @return static
     */
    public function withOverigInkomenPeriode(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EPeriode $OverigInkomenPeriode): static
    {
        $new = clone $this;
        $new->OverigInkomenPeriode = $OverigInkomenPeriode;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichting(): string
    {
        return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return static
     */
    public function withToelichting(string $Toelichting): static
    {
        $new = clone $this;
        $new->Toelichting = $Toelichting;

        return $new;
    }
}
