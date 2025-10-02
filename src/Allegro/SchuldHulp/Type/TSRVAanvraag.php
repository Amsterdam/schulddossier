<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSRVAanvraag implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader $InfoHeader;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Startdatum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Einddatum;

    /**
     * @var string
     */
    private string $Eindstatus;

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
     * @var float
     */
    private float $VTLB;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumBerekening;

    /**
     * @var float
     */
    private float $BrutoAfloscapaciteit;

    /**
     * @var float
     */
    private float $KostenFinancieelBeheer;

    /**
     * @var float
     */
    private float $KostenSchuldhulpverlening;

    /**
     * @var float
     */
    private float $NettoAfloscapaciteit;

    /**
     * @var float
     */
    private float $TotaalAangemeldeSchuld;

    /**
     * @var float
     */
    private float $TotaalTeruggemeldeSchuld;

    /**
     * @var int
     */
    private int $PartnerCode;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Aanvraagdatum;

    /**
     * @var string
     */
    private string $RedenOpschorting;

    /**
     * @var float
     */
    private float $ExtraInleg;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader $InfoHeader
     * @param \DateTimeInterface $Startdatum
     * @param \DateTimeInterface $Einddatum
     * @param string $Eindstatus
     * @param string $Medewerker
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param float $VTLB
     * @param \DateTimeInterface $DatumBerekening
     * @param float $BrutoAfloscapaciteit
     * @param float $KostenFinancieelBeheer
     * @param float $KostenSchuldhulpverlening
     * @param float $NettoAfloscapaciteit
     * @param float $TotaalAangemeldeSchuld
     * @param float $TotaalTeruggemeldeSchuld
     * @param int $PartnerCode
     * @param \DateTimeInterface $Aanvraagdatum
     * @param string $RedenOpschorting
     * @param float $ExtraInleg
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader $InfoHeader, \DateTimeInterface $Startdatum, \DateTimeInterface $Einddatum, string $Eindstatus, string $Medewerker, int $Opdrachtgever, int $OpdrachtgeverContact, float $VTLB, \DateTimeInterface $DatumBerekening, float $BrutoAfloscapaciteit, float $KostenFinancieelBeheer, float $KostenSchuldhulpverlening, float $NettoAfloscapaciteit, float $TotaalAangemeldeSchuld, float $TotaalTeruggemeldeSchuld, int $PartnerCode, \DateTimeInterface $Aanvraagdatum, string $RedenOpschorting, float $ExtraInleg)
    {
        $this->InfoHeader = $InfoHeader;
        $this->Startdatum = $Startdatum;
        $this->Einddatum = $Einddatum;
        $this->Eindstatus = $Eindstatus;
        $this->Medewerker = $Medewerker;
        $this->Opdrachtgever = $Opdrachtgever;
        $this->OpdrachtgeverContact = $OpdrachtgeverContact;
        $this->VTLB = $VTLB;
        $this->DatumBerekening = $DatumBerekening;
        $this->BrutoAfloscapaciteit = $BrutoAfloscapaciteit;
        $this->KostenFinancieelBeheer = $KostenFinancieelBeheer;
        $this->KostenSchuldhulpverlening = $KostenSchuldhulpverlening;
        $this->NettoAfloscapaciteit = $NettoAfloscapaciteit;
        $this->TotaalAangemeldeSchuld = $TotaalAangemeldeSchuld;
        $this->TotaalTeruggemeldeSchuld = $TotaalTeruggemeldeSchuld;
        $this->PartnerCode = $PartnerCode;
        $this->Aanvraagdatum = $Aanvraagdatum;
        $this->RedenOpschorting = $RedenOpschorting;
        $this->ExtraInleg = $ExtraInleg;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader
     */
    public function getInfoHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader $InfoHeader
     * @return static
     */
    public function withInfoHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader $InfoHeader) : static
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

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
     * @return \DateTimeInterface
     */
    public function getEinddatum() : \DateTimeInterface
    {
        return $this->Einddatum;
    }

    /**
     * @param \DateTimeInterface $Einddatum
     * @return static
     */
    public function withEinddatum(\DateTimeInterface $Einddatum) : static
    {
        $new = clone $this;
        $new->Einddatum = $Einddatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getEindstatus() : string
    {
        return $this->Eindstatus;
    }

    /**
     * @param string $Eindstatus
     * @return static
     */
    public function withEindstatus(string $Eindstatus) : static
    {
        $new = clone $this;
        $new->Eindstatus = $Eindstatus;

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
     * @return float
     */
    public function getVTLB() : float
    {
        return $this->VTLB;
    }

    /**
     * @param float $VTLB
     * @return static
     */
    public function withVTLB(float $VTLB) : static
    {
        $new = clone $this;
        $new->VTLB = $VTLB;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumBerekening() : \DateTimeInterface
    {
        return $this->DatumBerekening;
    }

    /**
     * @param \DateTimeInterface $DatumBerekening
     * @return static
     */
    public function withDatumBerekening(\DateTimeInterface $DatumBerekening) : static
    {
        $new = clone $this;
        $new->DatumBerekening = $DatumBerekening;

        return $new;
    }

    /**
     * @return float
     */
    public function getBrutoAfloscapaciteit() : float
    {
        return $this->BrutoAfloscapaciteit;
    }

    /**
     * @param float $BrutoAfloscapaciteit
     * @return static
     */
    public function withBrutoAfloscapaciteit(float $BrutoAfloscapaciteit) : static
    {
        $new = clone $this;
        $new->BrutoAfloscapaciteit = $BrutoAfloscapaciteit;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenFinancieelBeheer() : float
    {
        return $this->KostenFinancieelBeheer;
    }

    /**
     * @param float $KostenFinancieelBeheer
     * @return static
     */
    public function withKostenFinancieelBeheer(float $KostenFinancieelBeheer) : static
    {
        $new = clone $this;
        $new->KostenFinancieelBeheer = $KostenFinancieelBeheer;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenSchuldhulpverlening() : float
    {
        return $this->KostenSchuldhulpverlening;
    }

    /**
     * @param float $KostenSchuldhulpverlening
     * @return static
     */
    public function withKostenSchuldhulpverlening(float $KostenSchuldhulpverlening) : static
    {
        $new = clone $this;
        $new->KostenSchuldhulpverlening = $KostenSchuldhulpverlening;

        return $new;
    }

    /**
     * @return float
     */
    public function getNettoAfloscapaciteit() : float
    {
        return $this->NettoAfloscapaciteit;
    }

    /**
     * @param float $NettoAfloscapaciteit
     * @return static
     */
    public function withNettoAfloscapaciteit(float $NettoAfloscapaciteit) : static
    {
        $new = clone $this;
        $new->NettoAfloscapaciteit = $NettoAfloscapaciteit;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalAangemeldeSchuld() : float
    {
        return $this->TotaalAangemeldeSchuld;
    }

    /**
     * @param float $TotaalAangemeldeSchuld
     * @return static
     */
    public function withTotaalAangemeldeSchuld(float $TotaalAangemeldeSchuld) : static
    {
        $new = clone $this;
        $new->TotaalAangemeldeSchuld = $TotaalAangemeldeSchuld;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalTeruggemeldeSchuld() : float
    {
        return $this->TotaalTeruggemeldeSchuld;
    }

    /**
     * @param float $TotaalTeruggemeldeSchuld
     * @return static
     */
    public function withTotaalTeruggemeldeSchuld(float $TotaalTeruggemeldeSchuld) : static
    {
        $new = clone $this;
        $new->TotaalTeruggemeldeSchuld = $TotaalTeruggemeldeSchuld;

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

    /**
     * @return \DateTimeInterface
     */
    public function getAanvraagdatum() : \DateTimeInterface
    {
        return $this->Aanvraagdatum;
    }

    /**
     * @param \DateTimeInterface $Aanvraagdatum
     * @return static
     */
    public function withAanvraagdatum(\DateTimeInterface $Aanvraagdatum) : static
    {
        $new = clone $this;
        $new->Aanvraagdatum = $Aanvraagdatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getRedenOpschorting() : string
    {
        return $this->RedenOpschorting;
    }

    /**
     * @param string $RedenOpschorting
     * @return static
     */
    public function withRedenOpschorting(string $RedenOpschorting) : static
    {
        $new = clone $this;
        $new->RedenOpschorting = $RedenOpschorting;

        return $new;
    }

    /**
     * @return float
     */
    public function getExtraInleg() : float
    {
        return $this->ExtraInleg;
    }

    /**
     * @param float $ExtraInleg
     * @return static
     */
    public function withExtraInleg(float $ExtraInleg) : static
    {
        $new = clone $this;
        $new->ExtraInleg = $ExtraInleg;

        return $new;
    }
}

