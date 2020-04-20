<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TDocument
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $ContractVolgnummer
     */
    protected $ContractVolgnummer = null;

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var string $Geslacht
     */
    protected $Geslacht = null;

    /**
     * @var int $Geboortedatum
     */
    protected $Geboortedatum = null;

    /**
     * @var int $BSN
     */
    protected $BSN = null;

    /**
     * @var eSoortDocument $SoortDocument
     */
    protected $SoortDocument = null;

    /**
     * @var string $Onderwerp
     */
    protected $Onderwerp = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var string $DocumentNaam
     */
    protected $DocumentNaam = null;

    /**
     * @var base64Binary $Document
     */
    protected $Document = null;

    /**
     * @param int $Relatiecode
     * @param int $ContractVolgnummer
     * @param string $Achternaam
     * @param string $Geslacht
     * @param int $Geboortedatum
     * @param int $BSN
     * @param eSoortDocument $SoortDocument
     * @param string $Onderwerp
     * @param string $Omschrijving
     * @param string $DocumentNaam
     * @param base64Binary $Document
     */
    public function __construct($Relatiecode, $ContractVolgnummer, $Achternaam, $Geslacht, $Geboortedatum, $BSN, $SoortDocument, $Onderwerp, $Omschrijving, $DocumentNaam, $Document)
    {
      $this->Relatiecode = $Relatiecode;
      $this->ContractVolgnummer = $ContractVolgnummer;
      $this->Achternaam = $Achternaam;
      $this->Geslacht = $Geslacht;
      $this->Geboortedatum = $Geboortedatum;
      $this->BSN = $BSN;
      $this->SoortDocument = $SoortDocument;
      $this->Onderwerp = $Onderwerp;
      $this->Omschrijving = $Omschrijving;
      $this->DocumentNaam = $DocumentNaam;
      $this->Document = $Document;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setContractVolgnummer($ContractVolgnummer)
    {
      $this->ContractVolgnummer = $ContractVolgnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
      return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setAchternaam($Achternaam)
    {
      $this->Achternaam = $Achternaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeslacht()
    {
      return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setGeslacht($Geslacht)
    {
      $this->Geslacht = $Geslacht;
      return $this;
    }

    /**
     * @return int
     */
    public function getGeboortedatum()
    {
      return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setGeboortedatum($Geboortedatum)
    {
      $this->Geboortedatum = $Geboortedatum;
      return $this;
    }

    /**
     * @return int
     */
    public function getBSN()
    {
      return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setBSN($BSN)
    {
      $this->BSN = $BSN;
      return $this;
    }

    /**
     * @return eSoortDocument
     */
    public function getSoortDocument()
    {
      return $this->SoortDocument;
    }

    /**
     * @param eSoortDocument $SoortDocument
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setSoortDocument($SoortDocument)
    {
      $this->SoortDocument = $SoortDocument;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnderwerp()
    {
      return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setOnderwerp($Onderwerp)
    {
      $this->Onderwerp = $Onderwerp;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentNaam()
    {
      return $this->DocumentNaam;
    }

    /**
     * @param string $DocumentNaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setDocumentNaam($DocumentNaam)
    {
      $this->DocumentNaam = $DocumentNaam;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param base64Binary $Document
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocument
     */
    public function setDocument($Document)
    {
      $this->Document = $Document;
      return $this;
    }

}
