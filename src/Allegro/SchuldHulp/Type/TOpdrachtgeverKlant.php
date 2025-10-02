<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TOpdrachtgeverKlant implements RequestInterface
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
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Adres;

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
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray $Trajecten;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray $BBRVorm;

    /**
     * Constructor
     *
     * @param int $Relatiecode
     * @param string $Zoeknaam
     * @param \DateTimeInterface $GeboorteDatum
     * @param int $BSN
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Adres
     * @param int $CasusVolgnummer
     * @param int $AanvraagSRVolgnummer
     * @param int $SRVolgnummer
     * @param int $AanvraagBBRVolgnummer
     * @param int $BBRVolgnummer
     * @param bool $CasusCrisis
     * @param string $CasusFase
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray $Trajecten
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray $BBRVorm
     */
    public function __construct(int $Relatiecode, string $Zoeknaam, \DateTimeInterface $GeboorteDatum, int $BSN, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Adres, int $CasusVolgnummer, int $AanvraagSRVolgnummer, int $SRVolgnummer, int $AanvraagBBRVolgnummer, int $BBRVolgnummer, bool $CasusCrisis, string $CasusFase, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray $Trajecten, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray $BBRVorm)
    {
        $this->Relatiecode = $Relatiecode;
        $this->Zoeknaam = $Zoeknaam;
        $this->GeboorteDatum = $GeboorteDatum;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getAdres() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
    {
        return $this->Adres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Adres
     * @return static
     */
    public function withAdres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Adres) : static
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray
     */
    public function getTrajecten() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray
    {
        return $this->Trajecten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray $Trajecten
     * @return static
     */
    public function withTrajecten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray $Trajecten) : static
    {
        $new = clone $this;
        $new->Trajecten = $Trajecten;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray
     */
    public function getBBRVorm() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray
    {
        return $this->BBRVorm;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray $BBRVorm
     * @return static
     */
    public function withBBRVorm(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray $BBRVorm) : static
    {
        $new = clone $this;
        $new->BBRVorm = $BBRVorm;

        return $new;
    }
}

