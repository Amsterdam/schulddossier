<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TContract2 implements RequestInterface
{
    /**
     * @var int
     */
    private int $ContractCode;

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
    private string $ContractVolgnrSoort;

    /**
     * Constructor
     *
     * @param int $ContractCode
     * @param int $ContractVolgnummer
     * @param string $ContractSoort
     * @param string $ContractVolgnrSoort
     */
    public function __construct(int $ContractCode, int $ContractVolgnummer, string $ContractSoort, string $ContractVolgnrSoort)
    {
        $this->ContractCode = $ContractCode;
        $this->ContractVolgnummer = $ContractVolgnummer;
        $this->ContractSoort = $ContractSoort;
        $this->ContractVolgnrSoort = $ContractVolgnrSoort;
    }

    /**
     * @return int
     */
    public function getContractCode() : int
    {
        return $this->ContractCode;
    }

    /**
     * @param int $ContractCode
     * @return static
     */
    public function withContractCode(int $ContractCode) : static
    {
        $new = clone $this;
        $new->ContractCode = $ContractCode;

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
    public function getContractVolgnrSoort() : string
    {
        return $this->ContractVolgnrSoort;
    }

    /**
     * @param string $ContractVolgnrSoort
     * @return static
     */
    public function withContractVolgnrSoort(string $ContractVolgnrSoort) : static
    {
        $new = clone $this;
        $new->ContractVolgnrSoort = $ContractVolgnrSoort;

        return $new;
    }
}

