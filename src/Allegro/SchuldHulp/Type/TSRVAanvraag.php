<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSRVAanvraag implements RequestInterface
{
    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader
     */
    private $InfoHeader;

    /**
     * @var \DateTimeInterface
     */
    private $Startdatum;

    /**
     * @var \DateTimeInterface
     */
    private $Einddatum;

    /**
     * @var string
     */
    private $Eindstatus;

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
     * @var float
     */
    private $VTLB;

    /**
     * @var \DateTimeInterface
     */
    private $DatumBerekening;

    /**
     * @var float
     */
    private $BrutoAfloscapaciteit;

    /**
     * @var float
     */
    private $KostenFinancieelBeheer;

    /**
     * @var float
     */
    private $KostenSchuldhulpverlening;

    /**
     * @var float
     */
    private $NettoAfloscapaciteit;

    /**
     * @var float
     */
    private $TotaalAangemeldeSchuld;

    /**
     * @var float
     */
    private $TotaalTeruggemeldeSchuld;

    /**
     * @var int
     */
    private $PartnerCode;

    /**
     * @var \DateTimeInterface
     */
    private $Aanvraagdatum;

    /**
     * @var string
     */
    private $RedenOpschorting;

    /**
     * @var float
     */
    private $ExtraInleg;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader $InfoHeader
     * @var \DateTimeInterface $Startdatum
     * @var \DateTimeInterface $Einddatum
     * @var string $Eindstatus
     * @var string $Medewerker
     * @var int $Opdrachtgever
     * @var int $OpdrachtgeverContact
     * @var float $VTLB
     * @var \DateTimeInterface $DatumBerekening
     * @var float $BrutoAfloscapaciteit
     * @var float $KostenFinancieelBeheer
     * @var float $KostenSchuldhulpverlening
     * @var float $NettoAfloscapaciteit
     * @var float $TotaalAangemeldeSchuld
     * @var float $TotaalTeruggemeldeSchuld
     * @var int $PartnerCode
     * @var \DateTimeInterface $Aanvraagdatum
     * @var string $RedenOpschorting
     * @var float $ExtraInleg
     */
    public function __construct($InfoHeader, $Startdatum, $Einddatum, $Eindstatus, $Medewerker, $Opdrachtgever, $OpdrachtgeverContact, $VTLB, $DatumBerekening, $BrutoAfloscapaciteit, $KostenFinancieelBeheer, $KostenSchuldhulpverlening, $NettoAfloscapaciteit, $TotaalAangemeldeSchuld, $TotaalTeruggemeldeSchuld, $PartnerCode, $Aanvraagdatum, $RedenOpschorting, $ExtraInleg)
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
    public function getInfoHeader()
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader $InfoHeader
     * @return TSRVAanvraag
     */
    public function withInfoHeader($InfoHeader)
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

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
     * @return TSRVAanvraag
     */
    public function withStartdatum($Startdatum)
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEinddatum()
    {
        return $this->Einddatum;
    }

    /**
     * @param \DateTimeInterface $Einddatum
     * @return TSRVAanvraag
     */
    public function withEinddatum($Einddatum)
    {
        $new = clone $this;
        $new->Einddatum = $Einddatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getEindstatus()
    {
        return $this->Eindstatus;
    }

    /**
     * @param string $Eindstatus
     * @return TSRVAanvraag
     */
    public function withEindstatus($Eindstatus)
    {
        $new = clone $this;
        $new->Eindstatus = $Eindstatus;

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
     * @return TSRVAanvraag
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
     * @return TSRVAanvraag
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
     * @return TSRVAanvraag
     */
    public function withOpdrachtgeverContact($OpdrachtgeverContact)
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return float
     */
    public function getVTLB()
    {
        return $this->VTLB;
    }

    /**
     * @param float $VTLB
     * @return TSRVAanvraag
     */
    public function withVTLB($VTLB)
    {
        $new = clone $this;
        $new->VTLB = $VTLB;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumBerekening()
    {
        return $this->DatumBerekening;
    }

    /**
     * @param \DateTimeInterface $DatumBerekening
     * @return TSRVAanvraag
     */
    public function withDatumBerekening($DatumBerekening)
    {
        $new = clone $this;
        $new->DatumBerekening = $DatumBerekening;

        return $new;
    }

    /**
     * @return float
     */
    public function getBrutoAfloscapaciteit()
    {
        return $this->BrutoAfloscapaciteit;
    }

    /**
     * @param float $BrutoAfloscapaciteit
     * @return TSRVAanvraag
     */
    public function withBrutoAfloscapaciteit($BrutoAfloscapaciteit)
    {
        $new = clone $this;
        $new->BrutoAfloscapaciteit = $BrutoAfloscapaciteit;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenFinancieelBeheer()
    {
        return $this->KostenFinancieelBeheer;
    }

    /**
     * @param float $KostenFinancieelBeheer
     * @return TSRVAanvraag
     */
    public function withKostenFinancieelBeheer($KostenFinancieelBeheer)
    {
        $new = clone $this;
        $new->KostenFinancieelBeheer = $KostenFinancieelBeheer;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenSchuldhulpverlening()
    {
        return $this->KostenSchuldhulpverlening;
    }

    /**
     * @param float $KostenSchuldhulpverlening
     * @return TSRVAanvraag
     */
    public function withKostenSchuldhulpverlening($KostenSchuldhulpverlening)
    {
        $new = clone $this;
        $new->KostenSchuldhulpverlening = $KostenSchuldhulpverlening;

        return $new;
    }

    /**
     * @return float
     */
    public function getNettoAfloscapaciteit()
    {
        return $this->NettoAfloscapaciteit;
    }

    /**
     * @param float $NettoAfloscapaciteit
     * @return TSRVAanvraag
     */
    public function withNettoAfloscapaciteit($NettoAfloscapaciteit)
    {
        $new = clone $this;
        $new->NettoAfloscapaciteit = $NettoAfloscapaciteit;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalAangemeldeSchuld()
    {
        return $this->TotaalAangemeldeSchuld;
    }

    /**
     * @param float $TotaalAangemeldeSchuld
     * @return TSRVAanvraag
     */
    public function withTotaalAangemeldeSchuld($TotaalAangemeldeSchuld)
    {
        $new = clone $this;
        $new->TotaalAangemeldeSchuld = $TotaalAangemeldeSchuld;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalTeruggemeldeSchuld()
    {
        return $this->TotaalTeruggemeldeSchuld;
    }

    /**
     * @param float $TotaalTeruggemeldeSchuld
     * @return TSRVAanvraag
     */
    public function withTotaalTeruggemeldeSchuld($TotaalTeruggemeldeSchuld)
    {
        $new = clone $this;
        $new->TotaalTeruggemeldeSchuld = $TotaalTeruggemeldeSchuld;

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
     * @return TSRVAanvraag
     */
    public function withPartnerCode($PartnerCode)
    {
        $new = clone $this;
        $new->PartnerCode = $PartnerCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAanvraagdatum()
    {
        return $this->Aanvraagdatum;
    }

    /**
     * @param \DateTimeInterface $Aanvraagdatum
     * @return TSRVAanvraag
     */
    public function withAanvraagdatum($Aanvraagdatum)
    {
        $new = clone $this;
        $new->Aanvraagdatum = $Aanvraagdatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getRedenOpschorting()
    {
        return $this->RedenOpschorting;
    }

    /**
     * @param string $RedenOpschorting
     * @return TSRVAanvraag
     */
    public function withRedenOpschorting($RedenOpschorting)
    {
        $new = clone $this;
        $new->RedenOpschorting = $RedenOpschorting;

        return $new;
    }

    /**
     * @return float
     */
    public function getExtraInleg()
    {
        return $this->ExtraInleg;
    }

    /**
     * @param float $ExtraInleg
     * @return TSRVAanvraag
     */
    public function withExtraInleg($ExtraInleg)
    {
        $new = clone $this;
        $new->ExtraInleg = $ExtraInleg;

        return $new;
    }
}
