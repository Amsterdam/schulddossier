<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TDK implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDKHeader
     */
    private $InfoHeader;

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
    private $Contractlimiet;

    /**
     * @var float
     */
    private $MaandTermijn;

    /**
     * @var int
     */
    private $TheoretischeLooptijd;

    /**
     * @var \DateTimeInterface
     */
    private $DatumEersteAflossing;

    /**
     * @var float
     */
    private $Saldo;

    /**
     * @var float
     */
    private $Achterstand;

    /**
     * @var float
     */
    private $VrijOpneembaar;

    /**
     * @var float
     */
    private $EffectiefJaarpercentage;

    /**
     * @var \DateTimeInterface
     */
    private $DatumLaatsteBetaling;

    /**
     * @var float
     */
    private $BedragLaatsteBetaling;

    /**
     * @var float
     */
    private $VolledigVervroegdeAflossing;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var int
     */
    private $MedelenerCode;

    /**
     * @var float
     */
    private $Maandpercentage;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDKHeader $InfoHeader
     * @var int $Opdrachtgever
     * @var int $OpdrachtgeverContact
     * @var float $Contractlimiet
     * @var float $MaandTermijn
     * @var int $TheoretischeLooptijd
     * @var \DateTimeInterface $DatumEersteAflossing
     * @var float $Saldo
     * @var float $Achterstand
     * @var float $VrijOpneembaar
     * @var float $EffectiefJaarpercentage
     * @var \DateTimeInterface $DatumLaatsteBetaling
     * @var float $BedragLaatsteBetaling
     * @var float $VolledigVervroegdeAflossing
     * @var string $Medewerker
     * @var int $MedelenerCode
     * @var float $Maandpercentage
     */
    public function __construct($InfoHeader, $Opdrachtgever, $OpdrachtgeverContact, $Contractlimiet, $MaandTermijn, $TheoretischeLooptijd, $DatumEersteAflossing, $Saldo, $Achterstand, $VrijOpneembaar, $EffectiefJaarpercentage, $DatumLaatsteBetaling, $BedragLaatsteBetaling, $VolledigVervroegdeAflossing, $Medewerker, $MedelenerCode, $Maandpercentage)
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDKHeader
     */
    public function getInfoHeader()
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDKHeader $InfoHeader
     * @return TDK
     */
    public function withInfoHeader($InfoHeader)
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

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
     * @return TDK
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
     * @return TDK
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
    public function getContractlimiet()
    {
        return $this->Contractlimiet;
    }

    /**
     * @param float $Contractlimiet
     * @return TDK
     */
    public function withContractlimiet($Contractlimiet)
    {
        $new = clone $this;
        $new->Contractlimiet = $Contractlimiet;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandTermijn()
    {
        return $this->MaandTermijn;
    }

    /**
     * @param float $MaandTermijn
     * @return TDK
     */
    public function withMaandTermijn($MaandTermijn)
    {
        $new = clone $this;
        $new->MaandTermijn = $MaandTermijn;

        return $new;
    }

    /**
     * @return int
     */
    public function getTheoretischeLooptijd()
    {
        return $this->TheoretischeLooptijd;
    }

    /**
     * @param int $TheoretischeLooptijd
     * @return TDK
     */
    public function withTheoretischeLooptijd($TheoretischeLooptijd)
    {
        $new = clone $this;
        $new->TheoretischeLooptijd = $TheoretischeLooptijd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumEersteAflossing()
    {
        return $this->DatumEersteAflossing;
    }

    /**
     * @param \DateTimeInterface $DatumEersteAflossing
     * @return TDK
     */
    public function withDatumEersteAflossing($DatumEersteAflossing)
    {
        $new = clone $this;
        $new->DatumEersteAflossing = $DatumEersteAflossing;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldo()
    {
        return $this->Saldo;
    }

    /**
     * @param float $Saldo
     * @return TDK
     */
    public function withSaldo($Saldo)
    {
        $new = clone $this;
        $new->Saldo = $Saldo;

        return $new;
    }

    /**
     * @return float
     */
    public function getAchterstand()
    {
        return $this->Achterstand;
    }

    /**
     * @param float $Achterstand
     * @return TDK
     */
    public function withAchterstand($Achterstand)
    {
        $new = clone $this;
        $new->Achterstand = $Achterstand;

        return $new;
    }

    /**
     * @return float
     */
    public function getVrijOpneembaar()
    {
        return $this->VrijOpneembaar;
    }

    /**
     * @param float $VrijOpneembaar
     * @return TDK
     */
    public function withVrijOpneembaar($VrijOpneembaar)
    {
        $new = clone $this;
        $new->VrijOpneembaar = $VrijOpneembaar;

        return $new;
    }

    /**
     * @return float
     */
    public function getEffectiefJaarpercentage()
    {
        return $this->EffectiefJaarpercentage;
    }

    /**
     * @param float $EffectiefJaarpercentage
     * @return TDK
     */
    public function withEffectiefJaarpercentage($EffectiefJaarpercentage)
    {
        $new = clone $this;
        $new->EffectiefJaarpercentage = $EffectiefJaarpercentage;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumLaatsteBetaling()
    {
        return $this->DatumLaatsteBetaling;
    }

    /**
     * @param \DateTimeInterface $DatumLaatsteBetaling
     * @return TDK
     */
    public function withDatumLaatsteBetaling($DatumLaatsteBetaling)
    {
        $new = clone $this;
        $new->DatumLaatsteBetaling = $DatumLaatsteBetaling;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragLaatsteBetaling()
    {
        return $this->BedragLaatsteBetaling;
    }

    /**
     * @param float $BedragLaatsteBetaling
     * @return TDK
     */
    public function withBedragLaatsteBetaling($BedragLaatsteBetaling)
    {
        $new = clone $this;
        $new->BedragLaatsteBetaling = $BedragLaatsteBetaling;

        return $new;
    }

    /**
     * @return float
     */
    public function getVolledigVervroegdeAflossing()
    {
        return $this->VolledigVervroegdeAflossing;
    }

    /**
     * @param float $VolledigVervroegdeAflossing
     * @return TDK
     */
    public function withVolledigVervroegdeAflossing($VolledigVervroegdeAflossing)
    {
        $new = clone $this;
        $new->VolledigVervroegdeAflossing = $VolledigVervroegdeAflossing;

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
     * @return TDK
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
    public function getMedelenerCode()
    {
        return $this->MedelenerCode;
    }

    /**
     * @param int $MedelenerCode
     * @return TDK
     */
    public function withMedelenerCode($MedelenerCode)
    {
        $new = clone $this;
        $new->MedelenerCode = $MedelenerCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandpercentage()
    {
        return $this->Maandpercentage;
    }

    /**
     * @param float $Maandpercentage
     * @return TDK
     */
    public function withMaandpercentage($Maandpercentage)
    {
        $new = clone $this;
        $new->Maandpercentage = $Maandpercentage;

        return $new;
    }


}

