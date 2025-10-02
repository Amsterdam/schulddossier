<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class THulpverlener
{
    /**
     * @var int
     */
    private int $Code;

    /**
     * @var int
     */
    private int $OrganisatieCode;

    /**
     * @var string
     */
    private string $OrganisatieNaam;

    /**
     * @var int
     */
    private int $ContactCode;

    /**
     * @var string
     */
    private string $ContactNaam;

    /**
     * @var string
     */
    private string $SoortHulp;

    /**
     * @var bool
     */
    private bool $InzageGevraagd;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumInzageGevraagd;

    /**
     * @var string
     */
    private string $Inzage;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumInzage;

    /**
     * @return int
     */
    public function getCode() : int
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return static
     */
    public function withCode(int $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrganisatieCode() : int
    {
        return $this->OrganisatieCode;
    }

    /**
     * @param int $OrganisatieCode
     * @return static
     */
    public function withOrganisatieCode(int $OrganisatieCode) : static
    {
        $new = clone $this;
        $new->OrganisatieCode = $OrganisatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrganisatieNaam() : string
    {
        return $this->OrganisatieNaam;
    }

    /**
     * @param string $OrganisatieNaam
     * @return static
     */
    public function withOrganisatieNaam(string $OrganisatieNaam) : static
    {
        $new = clone $this;
        $new->OrganisatieNaam = $OrganisatieNaam;

        return $new;
    }

    /**
     * @return int
     */
    public function getContactCode() : int
    {
        return $this->ContactCode;
    }

    /**
     * @param int $ContactCode
     * @return static
     */
    public function withContactCode(int $ContactCode) : static
    {
        $new = clone $this;
        $new->ContactCode = $ContactCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getContactNaam() : string
    {
        return $this->ContactNaam;
    }

    /**
     * @param string $ContactNaam
     * @return static
     */
    public function withContactNaam(string $ContactNaam) : static
    {
        $new = clone $this;
        $new->ContactNaam = $ContactNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortHulp() : string
    {
        return $this->SoortHulp;
    }

    /**
     * @param string $SoortHulp
     * @return static
     */
    public function withSoortHulp(string $SoortHulp) : static
    {
        $new = clone $this;
        $new->SoortHulp = $SoortHulp;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInzageGevraagd() : bool
    {
        return $this->InzageGevraagd;
    }

    /**
     * @param bool $InzageGevraagd
     * @return static
     */
    public function withInzageGevraagd(bool $InzageGevraagd) : static
    {
        $new = clone $this;
        $new->InzageGevraagd = $InzageGevraagd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumInzageGevraagd() : \DateTimeInterface
    {
        return $this->DatumInzageGevraagd;
    }

    /**
     * @param \DateTimeInterface $DatumInzageGevraagd
     * @return static
     */
    public function withDatumInzageGevraagd(\DateTimeInterface $DatumInzageGevraagd) : static
    {
        $new = clone $this;
        $new->DatumInzageGevraagd = $DatumInzageGevraagd;

        return $new;
    }

    /**
     * @return string
     */
    public function getInzage() : string
    {
        return $this->Inzage;
    }

    /**
     * @param string $Inzage
     * @return static
     */
    public function withInzage(string $Inzage) : static
    {
        $new = clone $this;
        $new->Inzage = $Inzage;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumInzage() : \DateTimeInterface
    {
        return $this->DatumInzage;
    }

    /**
     * @param \DateTimeInterface $DatumInzage
     * @return static
     */
    public function withDatumInzage(\DateTimeInterface $DatumInzage) : static
    {
        $new = clone $this;
        $new->DatumInzage = $DatumInzage;

        return $new;
    }
}

