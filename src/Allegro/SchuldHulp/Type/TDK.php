<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TDK implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader $InfoHeader;

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
    private float $Contractlimiet;

    /**
     * @var float
     */
    private float $MaandTermijn;

    /**
     * @var int
     */
    private int $TheoretischeLooptijd;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumEersteAflossing;

    /**
     * @var float
     */
    private float $Saldo;

    /**
     * @var float
     */
    private float $Achterstand;

    /**
     * @var float
     */
    private float $VrijOpneembaar;

    /**
     * @var float
     */
    private float $EffectiefJaarpercentage;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumLaatsteBetaling;

    /**
     * @var float
     */
    private float $BedragLaatsteBetaling;

    /**
     * @var float
     */
    private float $VolledigVervroegdeAflossing;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var int
     */
    private int $MedelenerCode;

    /**
     * @var float
     */
    private float $Maandpercentage;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader $InfoHeader
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param float $Contractlimiet
     * @param float $MaandTermijn
     * @param int $TheoretischeLooptijd
     * @param \DateTimeInterface $DatumEersteAflossing
     * @param float $Saldo
     * @param float $Achterstand
     * @param float $VrijOpneembaar
     * @param float $EffectiefJaarpercentage
     * @param \DateTimeInterface $DatumLaatsteBetaling
     * @param float $BedragLaatsteBetaling
     * @param float $VolledigVervroegdeAflossing
     * @param string $Medewerker
     * @param int $MedelenerCode
     * @param float $Maandpercentage
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader $InfoHeader, int $Opdrachtgever, int $OpdrachtgeverContact, float $Contractlimiet, float $MaandTermijn, int $TheoretischeLooptijd, \DateTimeInterface $DatumEersteAflossing, float $Saldo, float $Achterstand, float $VrijOpneembaar, float $EffectiefJaarpercentage, \DateTimeInterface $DatumLaatsteBetaling, float $BedragLaatsteBetaling, float $VolledigVervroegdeAflossing, string $Medewerker, int $MedelenerCode, float $Maandpercentage)
    {
        $this->InfoHeader = $InfoHeader;
        $this->Opdrachtgever = $Opdrachtgever;
        $this->OpdrachtgeverContact = $OpdrachtgeverContact;
        $this->Contractlimiet = $Contractlimiet;
        $this->MaandTermijn = $MaandTermijn;
        $this->TheoretischeLooptijd = $TheoretischeLooptijd;
        $this->DatumEersteAflossing = $DatumEersteAflossing;
        $this->Saldo = $Saldo;
        $this->Achterstand = $Achterstand;
        $this->VrijOpneembaar = $VrijOpneembaar;
        $this->EffectiefJaarpercentage = $EffectiefJaarpercentage;
        $this->DatumLaatsteBetaling = $DatumLaatsteBetaling;
        $this->BedragLaatsteBetaling = $BedragLaatsteBetaling;
        $this->VolledigVervroegdeAflossing = $VolledigVervroegdeAflossing;
        $this->Medewerker = $Medewerker;
        $this->MedelenerCode = $MedelenerCode;
        $this->Maandpercentage = $Maandpercentage;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader
     */
    public function getInfoHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader $InfoHeader
     * @return static
     */
    public function withInfoHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader $InfoHeader) : static
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

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
    public function getContractlimiet() : float
    {
        return $this->Contractlimiet;
    }

    /**
     * @param float $Contractlimiet
     * @return static
     */
    public function withContractlimiet(float $Contractlimiet) : static
    {
        $new = clone $this;
        $new->Contractlimiet = $Contractlimiet;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandTermijn() : float
    {
        return $this->MaandTermijn;
    }

    /**
     * @param float $MaandTermijn
     * @return static
     */
    public function withMaandTermijn(float $MaandTermijn) : static
    {
        $new = clone $this;
        $new->MaandTermijn = $MaandTermijn;

        return $new;
    }

    /**
     * @return int
     */
    public function getTheoretischeLooptijd() : int
    {
        return $this->TheoretischeLooptijd;
    }

    /**
     * @param int $TheoretischeLooptijd
     * @return static
     */
    public function withTheoretischeLooptijd(int $TheoretischeLooptijd) : static
    {
        $new = clone $this;
        $new->TheoretischeLooptijd = $TheoretischeLooptijd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumEersteAflossing() : \DateTimeInterface
    {
        return $this->DatumEersteAflossing;
    }

    /**
     * @param \DateTimeInterface $DatumEersteAflossing
     * @return static
     */
    public function withDatumEersteAflossing(\DateTimeInterface $DatumEersteAflossing) : static
    {
        $new = clone $this;
        $new->DatumEersteAflossing = $DatumEersteAflossing;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldo() : float
    {
        return $this->Saldo;
    }

    /**
     * @param float $Saldo
     * @return static
     */
    public function withSaldo(float $Saldo) : static
    {
        $new = clone $this;
        $new->Saldo = $Saldo;

        return $new;
    }

    /**
     * @return float
     */
    public function getAchterstand() : float
    {
        return $this->Achterstand;
    }

    /**
     * @param float $Achterstand
     * @return static
     */
    public function withAchterstand(float $Achterstand) : static
    {
        $new = clone $this;
        $new->Achterstand = $Achterstand;

        return $new;
    }

    /**
     * @return float
     */
    public function getVrijOpneembaar() : float
    {
        return $this->VrijOpneembaar;
    }

    /**
     * @param float $VrijOpneembaar
     * @return static
     */
    public function withVrijOpneembaar(float $VrijOpneembaar) : static
    {
        $new = clone $this;
        $new->VrijOpneembaar = $VrijOpneembaar;

        return $new;
    }

    /**
     * @return float
     */
    public function getEffectiefJaarpercentage() : float
    {
        return $this->EffectiefJaarpercentage;
    }

    /**
     * @param float $EffectiefJaarpercentage
     * @return static
     */
    public function withEffectiefJaarpercentage(float $EffectiefJaarpercentage) : static
    {
        $new = clone $this;
        $new->EffectiefJaarpercentage = $EffectiefJaarpercentage;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumLaatsteBetaling() : \DateTimeInterface
    {
        return $this->DatumLaatsteBetaling;
    }

    /**
     * @param \DateTimeInterface $DatumLaatsteBetaling
     * @return static
     */
    public function withDatumLaatsteBetaling(\DateTimeInterface $DatumLaatsteBetaling) : static
    {
        $new = clone $this;
        $new->DatumLaatsteBetaling = $DatumLaatsteBetaling;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragLaatsteBetaling() : float
    {
        return $this->BedragLaatsteBetaling;
    }

    /**
     * @param float $BedragLaatsteBetaling
     * @return static
     */
    public function withBedragLaatsteBetaling(float $BedragLaatsteBetaling) : static
    {
        $new = clone $this;
        $new->BedragLaatsteBetaling = $BedragLaatsteBetaling;

        return $new;
    }

    /**
     * @return float
     */
    public function getVolledigVervroegdeAflossing() : float
    {
        return $this->VolledigVervroegdeAflossing;
    }

    /**
     * @param float $VolledigVervroegdeAflossing
     * @return static
     */
    public function withVolledigVervroegdeAflossing(float $VolledigVervroegdeAflossing) : static
    {
        $new = clone $this;
        $new->VolledigVervroegdeAflossing = $VolledigVervroegdeAflossing;

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
    public function getMedelenerCode() : int
    {
        return $this->MedelenerCode;
    }

    /**
     * @param int $MedelenerCode
     * @return static
     */
    public function withMedelenerCode(int $MedelenerCode) : static
    {
        $new = clone $this;
        $new->MedelenerCode = $MedelenerCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandpercentage() : float
    {
        return $this->Maandpercentage;
    }

    /**
     * @param float $Maandpercentage
     * @return static
     */
    public function withMaandpercentage(float $Maandpercentage) : static
    {
        $new = clone $this;
        $new->Maandpercentage = $Maandpercentage;

        return $new;
    }
}

