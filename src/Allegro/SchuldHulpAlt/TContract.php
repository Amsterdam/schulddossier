<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TContract
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var string $RelatieZoeknaam
     */
    protected $RelatieZoeknaam = null;

    /**
     * @var int $ContractVolgnummer
     */
    protected $ContractVolgnummer = null;

    /**
     * @var string $ContractSoort
     */
    protected $ContractSoort = null;

    /**
     * @var string $ContractStatus
     */
    protected $ContractStatus = null;

    /**
     * @var int $Contactpersoon
     */
    protected $Contactpersoon = null;

    /**
     * @var string $Inzage
     */
    protected $Inzage = null;

    /**
     * @param int $Relatiecode
     * @param string $RelatieZoeknaam
     * @param int $ContractVolgnummer
     * @param string $ContractSoort
     * @param string $ContractStatus
     * @param int $Contactpersoon
     * @param string $Inzage
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract
     */
    public function setRelatieZoeknaam($RelatieZoeknaam)
    {
      $this->RelatieZoeknaam = $RelatieZoeknaam;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract
     */
    public function setContractSoort($ContractSoort)
    {
      $this->ContractSoort = $ContractSoort;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract
     */
    public function setContractStatus($ContractStatus)
    {
      $this->ContractStatus = $ContractStatus;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract
     */
    public function setContactpersoon($Contactpersoon)
    {
      $this->Contactpersoon = $Contactpersoon;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract
     */
    public function setInzage($Inzage)
    {
      $this->Inzage = $Inzage;
      return $this;
    }

}
