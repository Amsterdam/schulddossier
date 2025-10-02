<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSRVEiser implements RequestInterface
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var int
     */
    private int $CodeEiser;

    /**
     * @var string
     */
    private string $NaamEiser;

    /**
     * @var int
     */
    private int $UniekVolgnummer;

    /**
     * @var string
     */
    private string $Referentie;

    /**
     * @var float
     */
    private float $AangemeldBedrag;

    /**
     * @var float
     */
    private float $TeruggemeldBedrag;

    /**
     * @var float
     */
    private float $PrognoseVoorstel;

    /**
     * @var string
     */
    private string $TerugmeldingVoorstel;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumTerugmeldingVoorstel;

    /**
     * @var string
     */
    private string $IndicatieOpgaaf;

    /**
     * @var string
     */
    private string $IndicatieVoorstel;

    /**
     * @var bool
     */
    private bool $IndicatieSK;

    /**
     * @var int
     */
    private int $CodeIncasso;

    /**
     * @var string
     */
    private string $NaamIncasso;

    /**
     * @var string
     */
    private string $ReferentieIncasso;

    /**
     * @var int
     */
    private int $CodeDeurwaarder;

    /**
     * @var string
     */
    private string $NaamDeurwaarder;

    /**
     * @var string
     */
    private string $ReferentieDeurwaarder;

    /**
     * Constructor
     *
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param int $CodeEiser
     * @param string $NaamEiser
     * @param int $UniekVolgnummer
     * @param string $Referentie
     * @param float $AangemeldBedrag
     * @param float $TeruggemeldBedrag
     * @param float $PrognoseVoorstel
     * @param string $TerugmeldingVoorstel
     * @param \DateTimeInterface $DatumTerugmeldingVoorstel
     * @param string $IndicatieOpgaaf
     * @param string $IndicatieVoorstel
     * @param bool $IndicatieSK
     * @param int $CodeIncasso
     * @param string $NaamIncasso
     * @param string $ReferentieIncasso
     * @param int $CodeDeurwaarder
     * @param string $NaamDeurwaarder
     * @param string $ReferentieDeurwaarder
     */
    public function __construct(int $RelatieCode, int $Volgnummer, int $CodeEiser, string $NaamEiser, int $UniekVolgnummer, string $Referentie, float $AangemeldBedrag, float $TeruggemeldBedrag, float $PrognoseVoorstel, string $TerugmeldingVoorstel, \DateTimeInterface $DatumTerugmeldingVoorstel, string $IndicatieOpgaaf, string $IndicatieVoorstel, bool $IndicatieSK, int $CodeIncasso, string $NaamIncasso, string $ReferentieIncasso, int $CodeDeurwaarder, string $NaamDeurwaarder, string $ReferentieDeurwaarder)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Volgnummer = $Volgnummer;
        $this->CodeEiser = $CodeEiser;
        $this->NaamEiser = $NaamEiser;
        $this->UniekVolgnummer = $UniekVolgnummer;
        $this->Referentie = $Referentie;
        $this->AangemeldBedrag = $AangemeldBedrag;
        $this->TeruggemeldBedrag = $TeruggemeldBedrag;
        $this->PrognoseVoorstel = $PrognoseVoorstel;
        $this->TerugmeldingVoorstel = $TerugmeldingVoorstel;
        $this->DatumTerugmeldingVoorstel = $DatumTerugmeldingVoorstel;
        $this->IndicatieOpgaaf = $IndicatieOpgaaf;
        $this->IndicatieVoorstel = $IndicatieVoorstel;
        $this->IndicatieSK = $IndicatieSK;
        $this->CodeIncasso = $CodeIncasso;
        $this->NaamIncasso = $NaamIncasso;
        $this->ReferentieIncasso = $ReferentieIncasso;
        $this->CodeDeurwaarder = $CodeDeurwaarder;
        $this->NaamDeurwaarder = $NaamDeurwaarder;
        $this->ReferentieDeurwaarder = $ReferentieDeurwaarder;
    }

    /**
     * @return int
     */
    public function getRelatieCode() : int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode) : static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer() : int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer) : static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeEiser() : int
    {
        return $this->CodeEiser;
    }

    /**
     * @param int $CodeEiser
     * @return static
     */
    public function withCodeEiser(int $CodeEiser) : static
    {
        $new = clone $this;
        $new->CodeEiser = $CodeEiser;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamEiser() : string
    {
        return $this->NaamEiser;
    }

    /**
     * @param string $NaamEiser
     * @return static
     */
    public function withNaamEiser(string $NaamEiser) : static
    {
        $new = clone $this;
        $new->NaamEiser = $NaamEiser;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer() : int
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return static
     */
    public function withUniekVolgnummer(int $UniekVolgnummer) : static
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentie() : string
    {
        return $this->Referentie;
    }

    /**
     * @param string $Referentie
     * @return static
     */
    public function withReferentie(string $Referentie) : static
    {
        $new = clone $this;
        $new->Referentie = $Referentie;

        return $new;
    }

    /**
     * @return float
     */
    public function getAangemeldBedrag() : float
    {
        return $this->AangemeldBedrag;
    }

    /**
     * @param float $AangemeldBedrag
     * @return static
     */
    public function withAangemeldBedrag(float $AangemeldBedrag) : static
    {
        $new = clone $this;
        $new->AangemeldBedrag = $AangemeldBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getTeruggemeldBedrag() : float
    {
        return $this->TeruggemeldBedrag;
    }

    /**
     * @param float $TeruggemeldBedrag
     * @return static
     */
    public function withTeruggemeldBedrag(float $TeruggemeldBedrag) : static
    {
        $new = clone $this;
        $new->TeruggemeldBedrag = $TeruggemeldBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrognoseVoorstel() : float
    {
        return $this->PrognoseVoorstel;
    }

    /**
     * @param float $PrognoseVoorstel
     * @return static
     */
    public function withPrognoseVoorstel(float $PrognoseVoorstel) : static
    {
        $new = clone $this;
        $new->PrognoseVoorstel = $PrognoseVoorstel;

        return $new;
    }

    /**
     * @return string
     */
    public function getTerugmeldingVoorstel() : string
    {
        return $this->TerugmeldingVoorstel;
    }

    /**
     * @param string $TerugmeldingVoorstel
     * @return static
     */
    public function withTerugmeldingVoorstel(string $TerugmeldingVoorstel) : static
    {
        $new = clone $this;
        $new->TerugmeldingVoorstel = $TerugmeldingVoorstel;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumTerugmeldingVoorstel() : \DateTimeInterface
    {
        return $this->DatumTerugmeldingVoorstel;
    }

    /**
     * @param \DateTimeInterface $DatumTerugmeldingVoorstel
     * @return static
     */
    public function withDatumTerugmeldingVoorstel(\DateTimeInterface $DatumTerugmeldingVoorstel) : static
    {
        $new = clone $this;
        $new->DatumTerugmeldingVoorstel = $DatumTerugmeldingVoorstel;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndicatieOpgaaf() : string
    {
        return $this->IndicatieOpgaaf;
    }

    /**
     * @param string $IndicatieOpgaaf
     * @return static
     */
    public function withIndicatieOpgaaf(string $IndicatieOpgaaf) : static
    {
        $new = clone $this;
        $new->IndicatieOpgaaf = $IndicatieOpgaaf;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndicatieVoorstel() : string
    {
        return $this->IndicatieVoorstel;
    }

    /**
     * @param string $IndicatieVoorstel
     * @return static
     */
    public function withIndicatieVoorstel(string $IndicatieVoorstel) : static
    {
        $new = clone $this;
        $new->IndicatieVoorstel = $IndicatieVoorstel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieSK() : bool
    {
        return $this->IndicatieSK;
    }

    /**
     * @param bool $IndicatieSK
     * @return static
     */
    public function withIndicatieSK(bool $IndicatieSK) : static
    {
        $new = clone $this;
        $new->IndicatieSK = $IndicatieSK;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeIncasso() : int
    {
        return $this->CodeIncasso;
    }

    /**
     * @param int $CodeIncasso
     * @return static
     */
    public function withCodeIncasso(int $CodeIncasso) : static
    {
        $new = clone $this;
        $new->CodeIncasso = $CodeIncasso;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamIncasso() : string
    {
        return $this->NaamIncasso;
    }

    /**
     * @param string $NaamIncasso
     * @return static
     */
    public function withNaamIncasso(string $NaamIncasso) : static
    {
        $new = clone $this;
        $new->NaamIncasso = $NaamIncasso;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentieIncasso() : string
    {
        return $this->ReferentieIncasso;
    }

    /**
     * @param string $ReferentieIncasso
     * @return static
     */
    public function withReferentieIncasso(string $ReferentieIncasso) : static
    {
        $new = clone $this;
        $new->ReferentieIncasso = $ReferentieIncasso;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeDeurwaarder() : int
    {
        return $this->CodeDeurwaarder;
    }

    /**
     * @param int $CodeDeurwaarder
     * @return static
     */
    public function withCodeDeurwaarder(int $CodeDeurwaarder) : static
    {
        $new = clone $this;
        $new->CodeDeurwaarder = $CodeDeurwaarder;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamDeurwaarder() : string
    {
        return $this->NaamDeurwaarder;
    }

    /**
     * @param string $NaamDeurwaarder
     * @return static
     */
    public function withNaamDeurwaarder(string $NaamDeurwaarder) : static
    {
        $new = clone $this;
        $new->NaamDeurwaarder = $NaamDeurwaarder;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentieDeurwaarder() : string
    {
        return $this->ReferentieDeurwaarder;
    }

    /**
     * @param string $ReferentieDeurwaarder
     * @return static
     */
    public function withReferentieDeurwaarder(string $ReferentieDeurwaarder) : static
    {
        $new = clone $this;
        $new->ReferentieDeurwaarder = $ReferentieDeurwaarder;

        return $new;
    }
}

