<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSRVEiser implements RequestInterface
{

    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var int
     */
    private $CodeEiser;

    /**
     * @var string
     */
    private $NaamEiser;

    /**
     * @var int
     */
    private $UniekVolgnummer;

    /**
     * @var string
     */
    private $Referentie;

    /**
     * @var float
     */
    private $AangemeldBedrag;

    /**
     * @var float
     */
    private $TeruggemeldBedrag;

    /**
     * @var float
     */
    private $PrognoseVoorstel;

    /**
     * @var string
     */
    private $TerugmeldingVoorstel;

    /**
     * @var \DateTimeInterface
     */
    private $DatumTerugmeldingVoorstel;

    /**
     * @var string
     */
    private $IndicatieOpgaaf;

    /**
     * @var string
     */
    private $IndicatieVoorstel;

    /**
     * @var bool
     */
    private $IndicatieSK;

    /**
     * @var int
     */
    private $CodeIncasso;

    /**
     * @var string
     */
    private $NaamIncasso;

    /**
     * @var string
     */
    private $ReferentieIncasso;

    /**
     * @var int
     */
    private $CodeDeurwaarder;

    /**
     * @var string
     */
    private $NaamDeurwaarder;

    /**
     * @var string
     */
    private $ReferentieDeurwaarder;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var int $Volgnummer
     * @var int $CodeEiser
     * @var string $NaamEiser
     * @var int $UniekVolgnummer
     * @var string $Referentie
     * @var float $AangemeldBedrag
     * @var float $TeruggemeldBedrag
     * @var float $PrognoseVoorstel
     * @var string $TerugmeldingVoorstel
     * @var \DateTimeInterface $DatumTerugmeldingVoorstel
     * @var string $IndicatieOpgaaf
     * @var string $IndicatieVoorstel
     * @var bool $IndicatieSK
     * @var int $CodeIncasso
     * @var string $NaamIncasso
     * @var string $ReferentieIncasso
     * @var int $CodeDeurwaarder
     * @var string $NaamDeurwaarder
     * @var string $ReferentieDeurwaarder
     */
    public function __construct($RelatieCode, $Volgnummer, $CodeEiser, $NaamEiser, $UniekVolgnummer, $Referentie, $AangemeldBedrag, $TeruggemeldBedrag, $PrognoseVoorstel, $TerugmeldingVoorstel, $DatumTerugmeldingVoorstel, $IndicatieOpgaaf, $IndicatieVoorstel, $IndicatieSK, $CodeIncasso, $NaamIncasso, $ReferentieIncasso, $CodeDeurwaarder, $NaamDeurwaarder, $ReferentieDeurwaarder)
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
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TSRVEiser
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TSRVEiser
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeEiser()
    {
        return $this->CodeEiser;
    }

    /**
     * @param int $CodeEiser
     * @return TSRVEiser
     */
    public function withCodeEiser($CodeEiser)
    {
        $new = clone $this;
        $new->CodeEiser = $CodeEiser;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamEiser()
    {
        return $this->NaamEiser;
    }

    /**
     * @param string $NaamEiser
     * @return TSRVEiser
     */
    public function withNaamEiser($NaamEiser)
    {
        $new = clone $this;
        $new->NaamEiser = $NaamEiser;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer()
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return TSRVEiser
     */
    public function withUniekVolgnummer($UniekVolgnummer)
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentie()
    {
        return $this->Referentie;
    }

    /**
     * @param string $Referentie
     * @return TSRVEiser
     */
    public function withReferentie($Referentie)
    {
        $new = clone $this;
        $new->Referentie = $Referentie;

        return $new;
    }

    /**
     * @return float
     */
    public function getAangemeldBedrag()
    {
        return $this->AangemeldBedrag;
    }

    /**
     * @param float $AangemeldBedrag
     * @return TSRVEiser
     */
    public function withAangemeldBedrag($AangemeldBedrag)
    {
        $new = clone $this;
        $new->AangemeldBedrag = $AangemeldBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getTeruggemeldBedrag()
    {
        return $this->TeruggemeldBedrag;
    }

    /**
     * @param float $TeruggemeldBedrag
     * @return TSRVEiser
     */
    public function withTeruggemeldBedrag($TeruggemeldBedrag)
    {
        $new = clone $this;
        $new->TeruggemeldBedrag = $TeruggemeldBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrognoseVoorstel()
    {
        return $this->PrognoseVoorstel;
    }

    /**
     * @param float $PrognoseVoorstel
     * @return TSRVEiser
     */
    public function withPrognoseVoorstel($PrognoseVoorstel)
    {
        $new = clone $this;
        $new->PrognoseVoorstel = $PrognoseVoorstel;

        return $new;
    }

    /**
     * @return string
     */
    public function getTerugmeldingVoorstel()
    {
        return $this->TerugmeldingVoorstel;
    }

    /**
     * @param string $TerugmeldingVoorstel
     * @return TSRVEiser
     */
    public function withTerugmeldingVoorstel($TerugmeldingVoorstel)
    {
        $new = clone $this;
        $new->TerugmeldingVoorstel = $TerugmeldingVoorstel;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumTerugmeldingVoorstel()
    {
        return $this->DatumTerugmeldingVoorstel;
    }

    /**
     * @param \DateTimeInterface $DatumTerugmeldingVoorstel
     * @return TSRVEiser
     */
    public function withDatumTerugmeldingVoorstel($DatumTerugmeldingVoorstel)
    {
        $new = clone $this;
        $new->DatumTerugmeldingVoorstel = $DatumTerugmeldingVoorstel;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndicatieOpgaaf()
    {
        return $this->IndicatieOpgaaf;
    }

    /**
     * @param string $IndicatieOpgaaf
     * @return TSRVEiser
     */
    public function withIndicatieOpgaaf($IndicatieOpgaaf)
    {
        $new = clone $this;
        $new->IndicatieOpgaaf = $IndicatieOpgaaf;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndicatieVoorstel()
    {
        return $this->IndicatieVoorstel;
    }

    /**
     * @param string $IndicatieVoorstel
     * @return TSRVEiser
     */
    public function withIndicatieVoorstel($IndicatieVoorstel)
    {
        $new = clone $this;
        $new->IndicatieVoorstel = $IndicatieVoorstel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieSK()
    {
        return $this->IndicatieSK;
    }

    /**
     * @param bool $IndicatieSK
     * @return TSRVEiser
     */
    public function withIndicatieSK($IndicatieSK)
    {
        $new = clone $this;
        $new->IndicatieSK = $IndicatieSK;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeIncasso()
    {
        return $this->CodeIncasso;
    }

    /**
     * @param int $CodeIncasso
     * @return TSRVEiser
     */
    public function withCodeIncasso($CodeIncasso)
    {
        $new = clone $this;
        $new->CodeIncasso = $CodeIncasso;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamIncasso()
    {
        return $this->NaamIncasso;
    }

    /**
     * @param string $NaamIncasso
     * @return TSRVEiser
     */
    public function withNaamIncasso($NaamIncasso)
    {
        $new = clone $this;
        $new->NaamIncasso = $NaamIncasso;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentieIncasso()
    {
        return $this->ReferentieIncasso;
    }

    /**
     * @param string $ReferentieIncasso
     * @return TSRVEiser
     */
    public function withReferentieIncasso($ReferentieIncasso)
    {
        $new = clone $this;
        $new->ReferentieIncasso = $ReferentieIncasso;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeDeurwaarder()
    {
        return $this->CodeDeurwaarder;
    }

    /**
     * @param int $CodeDeurwaarder
     * @return TSRVEiser
     */
    public function withCodeDeurwaarder($CodeDeurwaarder)
    {
        $new = clone $this;
        $new->CodeDeurwaarder = $CodeDeurwaarder;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamDeurwaarder()
    {
        return $this->NaamDeurwaarder;
    }

    /**
     * @param string $NaamDeurwaarder
     * @return TSRVEiser
     */
    public function withNaamDeurwaarder($NaamDeurwaarder)
    {
        $new = clone $this;
        $new->NaamDeurwaarder = $NaamDeurwaarder;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferentieDeurwaarder()
    {
        return $this->ReferentieDeurwaarder;
    }

    /**
     * @param string $ReferentieDeurwaarder
     * @return TSRVEiser
     */
    public function withReferentieDeurwaarder($ReferentieDeurwaarder)
    {
        $new = clone $this;
        $new->ReferentieDeurwaarder = $ReferentieDeurwaarder;

        return $new;
    }


}

