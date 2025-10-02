<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TContract
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var string
     */
    private string $RelatieZoeknaam;

    /**
     * @var int
     */
    private int $ContractVolgnummer;

    /**
     * @var string
     */
    private string $ContractSoort;

    /**
     * @var string
     */
    private string $ContractStatus;

    /**
     * @var int
     */
    private int $Contactpersoon;

    /**
     * @var string
     */
    private string $Inzage;

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRelatieZoeknaam() : string
    {
        return $this->RelatieZoeknaam;
    }

    /**
     * @param string $RelatieZoeknaam
     * @return static
     */
    public function withRelatieZoeknaam(string $RelatieZoeknaam) : static
    {
        $new = clone $this;
        $new->RelatieZoeknaam = $RelatieZoeknaam;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractVolgnummer() : int
    {
        return $this->ContractVolgnummer;
    }

    /**
     * @param int $ContractVolgnummer
     * @return static
     */
    public function withContractVolgnummer(int $ContractVolgnummer) : static
    {
        $new = clone $this;
        $new->ContractVolgnummer = $ContractVolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractSoort() : string
    {
        return $this->ContractSoort;
    }

    /**
     * @param string $ContractSoort
     * @return static
     */
    public function withContractSoort(string $ContractSoort) : static
    {
        $new = clone $this;
        $new->ContractSoort = $ContractSoort;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractStatus() : string
    {
        return $this->ContractStatus;
    }

    /**
     * @param string $ContractStatus
     * @return static
     */
    public function withContractStatus(string $ContractStatus) : static
    {
        $new = clone $this;
        $new->ContractStatus = $ContractStatus;

        return $new;
    }

    /**
     * @return int
     */
    public function getContactpersoon() : int
    {
        return $this->Contactpersoon;
    }

    /**
     * @param int $Contactpersoon
     * @return static
     */
    public function withContactpersoon(int $Contactpersoon) : static
    {
        $new = clone $this;
        $new->Contactpersoon = $Contactpersoon;

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
}

