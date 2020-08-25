<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TContract2
{

    /**
     * @var int $ContractCode
     */
    protected $ContractCode = null;

    /**
     * @var int $ContractVolgnummer
     */
    protected $ContractVolgnummer = null;

    /**
     * @var string $ContractSoort
     */
    protected $ContractSoort = null;

    /**
     * @var string $ContractVolgnrSoort
     */
    protected $ContractVolgnrSoort = null;

    /**
     * @param int $ContractCode
     * @param int $ContractVolgnummer
     * @param string $ContractSoort
     * @param string $ContractVolgnrSoort
     */
    public function __construct($ContractCode, $ContractVolgnummer, $ContractSoort, $ContractVolgnrSoort)
    {
      $this->ContractCode = $ContractCode;
      $this->ContractVolgnummer = $ContractVolgnummer;
      $this->ContractSoort = $ContractSoort;
      $this->ContractVolgnrSoort = $ContractVolgnrSoort;
    }

    /**
     * @return int
     */
    public function getContractCode()
    {
      return $this->ContractCode;
    }

    /**
     * @param int $ContractCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract2
     */
    public function setContractCode($ContractCode)
    {
      $this->ContractCode = $ContractCode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract2
     */
    public function setContractVolgnummer($ContractVolgnummer)
    {
      $this->ContractVolgnummer = $ContractVolgnummer;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract2
     */
    public function setContractSoort($ContractSoort)
    {
      $this->ContractSoort = $ContractSoort;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract2
     */
    public function setContractVolgnrSoort($ContractVolgnrSoort)
    {
      $this->ContractVolgnrSoort = $ContractVolgnrSoort;
      return $this;
    }

}
