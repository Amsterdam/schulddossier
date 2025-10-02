<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TOpdrachtgeverKlant
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var string
     */
    private string $Zoeknaam;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $GeboorteDatum;

    /**
     * @var int
     */
    private int $BSN;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Adres;

    /**
     * @var int
     */
    private int $CasusVolgnummer;

    /**
     * @var int
     */
    private int $AanvraagSRVolgnummer;

    /**
     * @var int
     */
    private int $SRVolgnummer;

    /**
     * @var int
     */
    private int $AanvraagBBRVolgnummer;

    /**
     * @var int
     */
    private int $BBRVolgnummer;

    /**
     * @var bool
     */
    private bool $CasusCrisis;

    /**
     * @var string
     */
    private string $CasusFase;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectSoortArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectSoortArray $Trajecten;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRVormArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRVormArray $BBRVorm;

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return string
     */
    public function getZoeknaam() : string
    {
        return $this->Zoeknaam;
    }

    /**
     * @param string $Zoeknaam
     * @return static
     */
    public function withZoeknaam(string $Zoeknaam) : static
    {
        $new = clone $this;
        $new->Zoeknaam = $Zoeknaam;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGeboorteDatum() : \DateTimeInterface
    {
        return $this->GeboorteDatum;
    }

    /**
     * @param \DateTimeInterface $GeboorteDatum
     * @return static
     */
    public function withGeboorteDatum(\DateTimeInterface $GeboorteDatum) : static
    {
        $new = clone $this;
        $new->GeboorteDatum = $GeboorteDatum;

        return $new;
    }

    /**
     * @return int
     */
    public function getBSN() : int
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return static
     */
    public function withBSN(int $BSN) : static
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getAdres() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->Adres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Adres
     * @return static
     */
    public function withAdres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Adres) : static
    {
        $new = clone $this;
        $new->Adres = $Adres;

        return $new;
    }

    /**
     * @return int
     */
    public function getCasusVolgnummer() : int
    {
        return $this->CasusVolgnummer;
    }

    /**
     * @param int $CasusVolgnummer
     * @return static
     */
    public function withCasusVolgnummer(int $CasusVolgnummer) : static
    {
        $new = clone $this;
        $new->CasusVolgnummer = $CasusVolgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getAanvraagSRVolgnummer() : int
    {
        return $this->AanvraagSRVolgnummer;
    }

    /**
     * @param int $AanvraagSRVolgnummer
     * @return static
     */
    public function withAanvraagSRVolgnummer(int $AanvraagSRVolgnummer) : static
    {
        $new = clone $this;
        $new->AanvraagSRVolgnummer = $AanvraagSRVolgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getSRVolgnummer() : int
    {
        return $this->SRVolgnummer;
    }

    /**
     * @param int $SRVolgnummer
     * @return static
     */
    public function withSRVolgnummer(int $SRVolgnummer) : static
    {
        $new = clone $this;
        $new->SRVolgnummer = $SRVolgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getAanvraagBBRVolgnummer() : int
    {
        return $this->AanvraagBBRVolgnummer;
    }

    /**
     * @param int $AanvraagBBRVolgnummer
     * @return static
     */
    public function withAanvraagBBRVolgnummer(int $AanvraagBBRVolgnummer) : static
    {
        $new = clone $this;
        $new->AanvraagBBRVolgnummer = $AanvraagBBRVolgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getBBRVolgnummer() : int
    {
        return $this->BBRVolgnummer;
    }

    /**
     * @param int $BBRVolgnummer
     * @return static
     */
    public function withBBRVolgnummer(int $BBRVolgnummer) : static
    {
        $new = clone $this;
        $new->BBRVolgnummer = $BBRVolgnummer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCasusCrisis() : bool
    {
        return $this->CasusCrisis;
    }

    /**
     * @param bool $CasusCrisis
     * @return static
     */
    public function withCasusCrisis(bool $CasusCrisis) : static
    {
        $new = clone $this;
        $new->CasusCrisis = $CasusCrisis;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusFase() : string
    {
        return $this->CasusFase;
    }

    /**
     * @param string $CasusFase
     * @return static
     */
    public function withCasusFase(string $CasusFase) : static
    {
        $new = clone $this;
        $new->CasusFase = $CasusFase;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectSoortArray
     */
    public function getTrajecten() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectSoortArray
    {
        return $this->Trajecten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectSoortArray $Trajecten
     * @return static
     */
    public function withTrajecten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectSoortArray $Trajecten) : static
    {
        $new = clone $this;
        $new->Trajecten = $Trajecten;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRVormArray
     */
    public function getBBRVorm() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRVormArray
    {
        return $this->BBRVorm;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRVormArray $BBRVorm
     * @return static
     */
    public function withBBRVorm(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRVormArray $BBRVorm) : static
    {
        $new = clone $this;
        $new->BBRVorm = $BBRVorm;

        return $new;
    }
}

