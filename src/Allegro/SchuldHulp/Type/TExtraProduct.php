<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TExtraProduct implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader
     */
    private $InfoHeader;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var int
     */
    private $Opdrachtgever;

    /**
     * @var int
     */
    private $OpdrachtgeverContact;

    /**
     * @var \DateTimeInterface
     */
    private $Startdatum;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var string
     */
    private $StatusOmschrijving;

    /**
     * @var int
     */
    private $UitvoerendeOrganisatie;

    /**
     * @var int
     */
    private $UitvoerendeOrganisatieContact;

    /**
     * @var \DateTimeInterface
     */
    private $GeschatteEinddatum;

    /**
     * @var int
     */
    private $PartnerCode;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader $InfoHeader
     * @var string $Medewerker
     * @var int $Opdrachtgever
     * @var int $OpdrachtgeverContact
     * @var \DateTimeInterface $Startdatum
     * @var string $Status
     * @var string $StatusOmschrijving
     * @var int $UitvoerendeOrganisatie
     * @var int $UitvoerendeOrganisatieContact
     * @var \DateTimeInterface $GeschatteEinddatum
     * @var int $PartnerCode
     */
    public function __construct($InfoHeader, $Medewerker, $Opdrachtgever, $OpdrachtgeverContact, $Startdatum, $Status, $StatusOmschrijving, $UitvoerendeOrganisatie, $UitvoerendeOrganisatieContact, $GeschatteEinddatum, $PartnerCode)
    {
        $this->InfoHeader = $InfoHeader;
        $this->Medewerker = $Medewerker;
        $this->Opdrachtgever = $Opdrachtgever;
        $this->OpdrachtgeverContact = $OpdrachtgeverContact;
        $this->Startdatum = $Startdatum;
        $this->Status = $Status;
        $this->StatusOmschrijving = $StatusOmschrijving;
        $this->UitvoerendeOrganisatie = $UitvoerendeOrganisatie;
        $this->UitvoerendeOrganisatieContact = $UitvoerendeOrganisatieContact;
        $this->GeschatteEinddatum = $GeschatteEinddatum;
        $this->PartnerCode = $PartnerCode;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader
     */
    public function getInfoHeader()
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader $InfoHeader
     * @return TExtraProduct
     */
    public function withInfoHeader($InfoHeader)
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return TExtraProduct
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever()
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return TExtraProduct
     */
    public function withOpdrachtgever($Opdrachtgever)
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact()
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return TExtraProduct
     */
    public function withOpdrachtgeverContact($OpdrachtgeverContact)
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatum()
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return TExtraProduct
     */
    public function withStartdatum($Startdatum)
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return TExtraProduct
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusOmschrijving()
    {
        return $this->StatusOmschrijving;
    }

    /**
     * @param string $StatusOmschrijving
     * @return TExtraProduct
     */
    public function withStatusOmschrijving($StatusOmschrijving)
    {
        $new = clone $this;
        $new->StatusOmschrijving = $StatusOmschrijving;

        return $new;
    }

    /**
     * @return int
     */
    public function getUitvoerendeOrganisatie()
    {
        return $this->UitvoerendeOrganisatie;
    }

    /**
     * @param int $UitvoerendeOrganisatie
     * @return TExtraProduct
     */
    public function withUitvoerendeOrganisatie($UitvoerendeOrganisatie)
    {
        $new = clone $this;
        $new->UitvoerendeOrganisatie = $UitvoerendeOrganisatie;

        return $new;
    }

    /**
     * @return int
     */
    public function getUitvoerendeOrganisatieContact()
    {
        return $this->UitvoerendeOrganisatieContact;
    }

    /**
     * @param int $UitvoerendeOrganisatieContact
     * @return TExtraProduct
     */
    public function withUitvoerendeOrganisatieContact($UitvoerendeOrganisatieContact)
    {
        $new = clone $this;
        $new->UitvoerendeOrganisatieContact = $UitvoerendeOrganisatieContact;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGeschatteEinddatum()
    {
        return $this->GeschatteEinddatum;
    }

    /**
     * @param \DateTimeInterface $GeschatteEinddatum
     * @return TExtraProduct
     */
    public function withGeschatteEinddatum($GeschatteEinddatum)
    {
        $new = clone $this;
        $new->GeschatteEinddatum = $GeschatteEinddatum;

        return $new;
    }

    /**
     * @return int
     */
    public function getPartnerCode()
    {
        return $this->PartnerCode;
    }

    /**
     * @param int $PartnerCode
     * @return TExtraProduct
     */
    public function withPartnerCode($PartnerCode)
    {
        $new = clone $this;
        $new->PartnerCode = $PartnerCode;

        return $new;
    }


}

