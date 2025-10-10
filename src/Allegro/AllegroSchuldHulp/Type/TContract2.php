<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TContract2
{
    /**
     * @var int
     */
    private $ContractCode;

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
    private $ContractVolgnrSoort;

    /**
     * @return int
     */
    public function getContractCode()
    {
        return $this->ContractCode;
    }

    /**
     * @param int $ContractCode
     * @return TContract2
     */
    public function withContractCode($ContractCode)
    {
        $new = clone $this;
        $new->ContractCode = $ContractCode;

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
     * @return TContract2
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
     * @return TContract2
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
    public function getContractVolgnrSoort()
    {
        return $this->ContractVolgnrSoort;
    }

    /**
     * @param string $ContractVolgnrSoort
     * @return TContract2
     */
    public function withContractVolgnrSoort($ContractVolgnrSoort)
    {
        $new = clone $this;
        $new->ContractVolgnrSoort = $ContractVolgnrSoort;

        return $new;
    }
}

