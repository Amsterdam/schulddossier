<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TExtraProduct
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader $InfoHeader;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var int
     */
    private int $Opdrachtgever;

    /**
     * @var int
     */
    private int $OpdrachtgeverContact;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Startdatum;

    /**
     * @var string
     */
    private string $Status;

    /**
     * @var string
     */
    private string $StatusOmschrijving;

    /**
     * @var int
     */
    private int $UitvoerendeOrganisatie;

    /**
     * @var int
     */
    private int $UitvoerendeOrganisatieContact;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $GeschatteEinddatum;

    /**
     * @var int
     */
    private int $PartnerCode;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader
     */
    public function getInfoHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader $InfoHeader
     * @return static
     */
    public function withInfoHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader $InfoHeader) : static
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker() : string
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return static
     */
    public function withMedewerker(string $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever() : int
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return static
     */
    public function withOpdrachtgever(int $Opdrachtgever) : static
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact() : int
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return static
     */
    public function withOpdrachtgeverContact(int $OpdrachtgeverContact) : static
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatum() : \DateTimeInterface
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return static
     */
    public function withStartdatum(\DateTimeInterface $Startdatum) : static
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return static
     */
    public function withStatus(string $Status) : static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusOmschrijving() : string
    {
        return $this->StatusOmschrijving;
    }

    /**
     * @param string $StatusOmschrijving
     * @return static
     */
    public function withStatusOmschrijving(string $StatusOmschrijving) : static
    {
        $new = clone $this;
        $new->StatusOmschrijving = $StatusOmschrijving;

        return $new;
    }

    /**
     * @return int
     */
    public function getUitvoerendeOrganisatie() : int
    {
        return $this->UitvoerendeOrganisatie;
    }

    /**
     * @param int $UitvoerendeOrganisatie
     * @return static
     */
    public function withUitvoerendeOrganisatie(int $UitvoerendeOrganisatie) : static
    {
        $new = clone $this;
        $new->UitvoerendeOrganisatie = $UitvoerendeOrganisatie;

        return $new;
    }

    /**
     * @return int
     */
    public function getUitvoerendeOrganisatieContact() : int
    {
        return $this->UitvoerendeOrganisatieContact;
    }

    /**
     * @param int $UitvoerendeOrganisatieContact
     * @return static
     */
    public function withUitvoerendeOrganisatieContact(int $UitvoerendeOrganisatieContact) : static
    {
        $new = clone $this;
        $new->UitvoerendeOrganisatieContact = $UitvoerendeOrganisatieContact;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGeschatteEinddatum() : \DateTimeInterface
    {
        return $this->GeschatteEinddatum;
    }

    /**
     * @param \DateTimeInterface $GeschatteEinddatum
     * @return static
     */
    public function withGeschatteEinddatum(\DateTimeInterface $GeschatteEinddatum) : static
    {
        $new = clone $this;
        $new->GeschatteEinddatum = $GeschatteEinddatum;

        return $new;
    }

    /**
     * @return int
     */
    public function getPartnerCode() : int
    {
        return $this->PartnerCode;
    }

    /**
     * @param int $PartnerCode
     * @return static
     */
    public function withPartnerCode(int $PartnerCode) : static
    {
        $new = clone $this;
        $new->PartnerCode = $PartnerCode;

        return $new;
    }
}

