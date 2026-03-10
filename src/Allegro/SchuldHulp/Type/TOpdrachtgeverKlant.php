<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TOpdrachtgeverKlant implements RequestInterface
{
    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var string
     */
    private $Zoeknaam;

    /**
     * @var \DateTimeInterface
     */
    private $GeboorteDatum;

    /**
     * @var int
     */
    private $BSN;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $Adres;

    /**
     * @var int
     */
    private $CasusVolgnummer;

    /**
     * @var int
     */
    private $AanvraagSRVolgnummer;

    /**
     * @var int
     */
    private $SRVolgnummer;

    /**
     * @var int
     */
    private $AanvraagBBRVolgnummer;

    /**
     * @var int
     */
    private $BBRVolgnummer;

    /**
     * @var bool
     */
    private $CasusCrisis;

    /**
     * @var string
     */
    private $CasusFase;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray
     */
    private $Trajecten;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray
     */
    private $BBRVorm;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var string $Zoeknaam
     * @var \DateTimeInterface $GeboorteDatum
     * @var int $BSN
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Adres
     * @var int $CasusVolgnummer
     * @var int $AanvraagSRVolgnummer
     * @var int $SRVolgnummer
     * @var int $AanvraagBBRVolgnummer
     * @var int $BBRVolgnummer
     * @var bool $CasusCrisis
     * @var string $CasusFase
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray $Trajecten
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray $BBRVorm
     */
    public function __construct($Relatiecode, $Zoeknaam, $GeboorteDatum, $BSN, $Adres, $CasusVolgnummer, $AanvraagSRVolgnummer, $SRVolgnummer, $AanvraagBBRVolgnummer, $BBRVolgnummer, $CasusCrisis, $CasusFase, $Trajecten, $BBRVorm)
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
    public function getRelatiecode()
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return TOpdrachtgeverKlant
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
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
     * @return TOpdrachtgeverKlant
     */
    public function withZoeknaam($Zoeknaam)
    {
        $new = clone $this;
        $new->Zoeknaam = $Zoeknaam;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGeboorteDatum()
    {
        return $this->GeboorteDatum;
    }

    /**
     * @param \DateTimeInterface $GeboorteDatum
     * @return TOpdrachtgeverKlant
     */
    public function withGeboorteDatum($GeboorteDatum)
    {
        $new = clone $this;
        $new->GeboorteDatum = $GeboorteDatum;

        return $new;
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
     * @return TOpdrachtgeverKlant
     */
    public function withBSN($BSN)
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getAdres()
    {
        return $this->Adres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Adres
     * @return TOpdrachtgeverKlant
     */
    public function withAdres($Adres)
    {
        $new = clone $this;
        $new->Adres = $Adres;

        return $new;
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
     * @return TOpdrachtgeverKlant
     */
    public function withCasusVolgnummer($CasusVolgnummer)
    {
        $new = clone $this;
        $new->CasusVolgnummer = $CasusVolgnummer;

        return $new;
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
     * @return TOpdrachtgeverKlant
     */
    public function withAanvraagSRVolgnummer($AanvraagSRVolgnummer)
    {
        $new = clone $this;
        $new->AanvraagSRVolgnummer = $AanvraagSRVolgnummer;

        return $new;
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
     * @return TOpdrachtgeverKlant
     */
    public function withSRVolgnummer($SRVolgnummer)
    {
        $new = clone $this;
        $new->SRVolgnummer = $SRVolgnummer;

        return $new;
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
     * @return TOpdrachtgeverKlant
     */
    public function withAanvraagBBRVolgnummer($AanvraagBBRVolgnummer)
    {
        $new = clone $this;
        $new->AanvraagBBRVolgnummer = $AanvraagBBRVolgnummer;

        return $new;
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
     * @return TOpdrachtgeverKlant
     */
    public function withBBRVolgnummer($BBRVolgnummer)
    {
        $new = clone $this;
        $new->BBRVolgnummer = $BBRVolgnummer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCasusCrisis()
    {
        return $this->CasusCrisis;
    }

    /**
     * @param bool $CasusCrisis
     * @return TOpdrachtgeverKlant
     */
    public function withCasusCrisis($CasusCrisis)
    {
        $new = clone $this;
        $new->CasusCrisis = $CasusCrisis;

        return $new;
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
     * @return TOpdrachtgeverKlant
     */
    public function withCasusFase($CasusFase)
    {
        $new = clone $this;
        $new->CasusFase = $CasusFase;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray
     */
    public function getTrajecten()
    {
        return $this->Trajecten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray $Trajecten
     * @return TOpdrachtgeverKlant
     */
    public function withTrajecten($Trajecten)
    {
        $new = clone $this;
        $new->Trajecten = $Trajecten;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray
     */
    public function getBBRVorm()
    {
        return $this->BBRVorm;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray $BBRVorm
     * @return TOpdrachtgeverKlant
     */
    public function withBBRVorm($BBRVorm)
    {
        $new = clone $this;
        $new->BBRVorm = $BBRVorm;

        return $new;
    }
}
