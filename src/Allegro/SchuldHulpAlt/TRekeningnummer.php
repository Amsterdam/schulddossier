<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TRekeningnummer
{

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var string $IBAN
     */
    protected $IBAN = null;

    /**
     * @var string $BIC
     */
    protected $BIC = null;

    /**
     * @var string $Bank
     */
    protected $Bank = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var boolean $Buitenland
     */
    protected $Buitenland = null;

    /**
     * @var boolean $Geblokkeerd
     */
    protected $Geblokkeerd = null;

    /**
     * @param int $Volgnummer
     * @param string $IBAN
     * @param string $BIC
     * @param string $Bank
     * @param string $Omschrijving
     * @param boolean $Buitenland
     * @param boolean $Geblokkeerd
     */
    public function __construct($Volgnummer, $IBAN, $BIC, $Bank, $Omschrijving, $Buitenland, $Geblokkeerd)
    {
      $this->Volgnummer = $Volgnummer;
      $this->IBAN = $IBAN;
      $this->BIC = $BIC;
      $this->Bank = $Bank;
      $this->Omschrijving = $Omschrijving;
      $this->Buitenland = $Buitenland;
      $this->Geblokkeerd = $Geblokkeerd;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRekeningnummer
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getIBAN()
    {
      return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRekeningnummer
     */
    public function setIBAN($IBAN)
    {
      $this->IBAN = $IBAN;
      return $this;
    }

    /**
     * @return string
     */
    public function getBIC()
    {
      return $this->BIC;
    }

    /**
     * @param string $BIC
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRekeningnummer
     */
    public function setBIC($BIC)
    {
      $this->BIC = $BIC;
      return $this;
    }

    /**
     * @return string
     */
    public function getBank()
    {
      return $this->Bank;
    }

    /**
     * @param string $Bank
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRekeningnummer
     */
    public function setBank($Bank)
    {
      $this->Bank = $Bank;
      return $this;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
      return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRekeningnummer
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBuitenland()
    {
      return $this->Buitenland;
    }

    /**
     * @param boolean $Buitenland
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRekeningnummer
     */
    public function setBuitenland($Buitenland)
    {
      $this->Buitenland = $Buitenland;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGeblokkeerd()
    {
      return $this->Geblokkeerd;
    }

    /**
     * @param boolean $Geblokkeerd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRekeningnummer
     */
    public function setGeblokkeerd($Geblokkeerd)
    {
      $this->Geblokkeerd = $Geblokkeerd;
      return $this;
    }

}
