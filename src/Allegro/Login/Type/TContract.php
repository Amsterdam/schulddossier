<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TContract implements RequestInterface
{
    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var string
     */
    private $RelatieZoeknaam;

    /**
     * @var int
     */
    private $ContractVolgnummer;

    /**
     * @var string
     */
    private $ContractSoort;

    /**
     * @var string
     */
    private $ContractStatus;

    /**
     * @var int
     */
    private $Contactpersoon;

    /**
     * @var string
     */
    private $Inzage;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var string $RelatieZoeknaam
     * @var int $ContractVolgnummer
     * @var string $ContractSoort
     * @var string $ContractStatus
     * @var int $Contactpersoon
     * @var string $Inzage
     */
    public function __construct($Relatiecode, $RelatieZoeknaam, $ContractVolgnummer, $ContractSoort, $ContractStatus, $Contactpersoon, $Inzage)
    {
        $this->Relatiecode = $Relatiecode;
        $this->RelatieZoeknaam = $RelatieZoeknaam;
        $this->ContractVolgnummer = $ContractVolgnummer;
        $this->ContractSoort = $ContractSoort;
        $this->ContractStatus = $ContractStatus;
        $this->Contactpersoon = $Contactpersoon;
        $this->Inzage = $Inzage;
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return TContract
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRelatieZoeknaam()
    {
        return $this->RelatieZoeknaam;
    }

    /**
     * @param string $RelatieZoeknaam
     * @return TContract
     */
    public function withRelatieZoeknaam($RelatieZoeknaam)
    {
        $new = clone $this;
        $new->RelatieZoeknaam = $RelatieZoeknaam;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractVolgnummer()
    {
        return $this->ContractVolgnummer;
    }

    /**
     * @param int $ContractVolgnummer
     * @return TContract
     */
    public function withContractVolgnummer($ContractVolgnummer)
    {
        $new = clone $this;
        $new->ContractVolgnummer = $ContractVolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractSoort()
    {
        return $this->ContractSoort;
    }

    /**
     * @param string $ContractSoort
     * @return TContract
     */
    public function withContractSoort($ContractSoort)
    {
        $new = clone $this;
        $new->ContractSoort = $ContractSoort;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractStatus()
    {
        return $this->ContractStatus;
    }

    /**
     * @param string $ContractStatus
     * @return TContract
     */
    public function withContractStatus($ContractStatus)
    {
        $new = clone $this;
        $new->ContractStatus = $ContractStatus;

        return $new;
    }

    /**
     * @return int
     */
    public function getContactpersoon()
    {
        return $this->Contactpersoon;
    }

    /**
     * @param int $Contactpersoon
     * @return TContract
     */
    public function withContactpersoon($Contactpersoon)
    {
        $new = clone $this;
        $new->Contactpersoon = $Contactpersoon;

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
     * @return TContract
     */
    public function withInzage($Inzage)
    {
        $new = clone $this;
        $new->Inzage = $Inzage;

        return $new;
    }
}
