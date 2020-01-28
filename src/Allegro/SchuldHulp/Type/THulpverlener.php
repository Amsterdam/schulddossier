<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class THulpverlener implements RequestInterface
{

    /**
     * @var int
     */
    private $Code;

    /**
     * @var int
     */
    private $OrganisatieCode;

    /**
     * @var string
     */
    private $OrganisatieNaam;

    /**
     * @var int
     */
    private $ContactCode;

    /**
     * @var string
     */
    private $ContactNaam;

    /**
     * @var string
     */
    private $SoortHulp;

    /**
     * @var bool
     */
    private $InzageGevraagd;

    /**
     * @var \DateTimeInterface
     */
    private $DatumInzageGevraagd;

    /**
     * @var string
     */
    private $Inzage;

    /**
     * @var \DateTimeInterface
     */
    private $DatumInzage;

    /**
     * Constructor
     *
     * @var int $Code
     * @var int $OrganisatieCode
     * @var string $OrganisatieNaam
     * @var int $ContactCode
     * @var string $ContactNaam
     * @var string $SoortHulp
     * @var bool $InzageGevraagd
     * @var \DateTimeInterface $DatumInzageGevraagd
     * @var string $Inzage
     * @var \DateTimeInterface $DatumInzage
     */
    public function __construct($Code, $OrganisatieCode, $OrganisatieNaam, $ContactCode, $ContactNaam, $SoortHulp, $InzageGevraagd, $DatumInzageGevraagd, $Inzage, $DatumInzage)
    {
        $this->Code = $Code;
        $this->OrganisatieCode = $OrganisatieCode;
        $this->OrganisatieNaam = $OrganisatieNaam;
        $this->ContactCode = $ContactCode;
        $this->ContactNaam = $ContactNaam;
        $this->SoortHulp = $SoortHulp;
        $this->InzageGevraagd = $InzageGevraagd;
        $this->DatumInzageGevraagd = $DatumInzageGevraagd;
        $this->Inzage = $Inzage;
        $this->DatumInzage = $DatumInzage;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return THulpverlener
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrganisatieCode()
    {
        return $this->OrganisatieCode;
    }

    /**
     * @param int $OrganisatieCode
     * @return THulpverlener
     */
    public function withOrganisatieCode($OrganisatieCode)
    {
        $new = clone $this;
        $new->OrganisatieCode = $OrganisatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrganisatieNaam()
    {
        return $this->OrganisatieNaam;
    }

    /**
     * @param string $OrganisatieNaam
     * @return THulpverlener
     */
    public function withOrganisatieNaam($OrganisatieNaam)
    {
        $new = clone $this;
        $new->OrganisatieNaam = $OrganisatieNaam;

        return $new;
    }

    /**
     * @return int
     */
    public function getContactCode()
    {
        return $this->ContactCode;
    }

    /**
     * @param int $ContactCode
     * @return THulpverlener
     */
    public function withContactCode($ContactCode)
    {
        $new = clone $this;
        $new->ContactCode = $ContactCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getContactNaam()
    {
        return $this->ContactNaam;
    }

    /**
     * @param string $ContactNaam
     * @return THulpverlener
     */
    public function withContactNaam($ContactNaam)
    {
        $new = clone $this;
        $new->ContactNaam = $ContactNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortHulp()
    {
        return $this->SoortHulp;
    }

    /**
     * @param string $SoortHulp
     * @return THulpverlener
     */
    public function withSoortHulp($SoortHulp)
    {
        $new = clone $this;
        $new->SoortHulp = $SoortHulp;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInzageGevraagd()
    {
        return $this->InzageGevraagd;
    }

    /**
     * @param bool $InzageGevraagd
     * @return THulpverlener
     */
    public function withInzageGevraagd($InzageGevraagd)
    {
        $new = clone $this;
        $new->InzageGevraagd = $InzageGevraagd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumInzageGevraagd()
    {
        return $this->DatumInzageGevraagd;
    }

    /**
     * @param \DateTimeInterface $DatumInzageGevraagd
     * @return THulpverlener
     */
    public function withDatumInzageGevraagd($DatumInzageGevraagd)
    {
        $new = clone $this;
        $new->DatumInzageGevraagd = $DatumInzageGevraagd;

        return $new;
    }

    /**
     * @return string
     */
    public function getInzage()
    {
        return $this->Inzage;
    }

    /**
     * @param string $Inzage
     * @return THulpverlener
     */
    public function withInzage($Inzage)
    {
        $new = clone $this;
        $new->Inzage = $Inzage;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumInzage()
    {
        return $this->DatumInzage;
    }

    /**
     * @param \DateTimeInterface $DatumInzage
     * @return THulpverlener
     */
    public function withDatumInzage($DatumInzage)
    {
        $new = clone $this;
        $new->DatumInzage = $DatumInzage;

        return $new;
    }


}

