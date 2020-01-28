<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TDocument implements RequestInterface
{

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $ContractVolgnummer;

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var string
     */
    private $Geslacht;

    /**
     * @var int
     */
    private $Geboortedatum;

    /**
     * @var int
     */
    private $BSN;

    /**
     * @var string
     */
    private $SoortDocument;

    /**
     * @var string
     */
    private $Onderwerp;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var string
     */
    private $DocumentNaam;

    /**
     * @var string
     */
    private $Document;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var int $ContractVolgnummer
     * @var string $Achternaam
     * @var string $Geslacht
     * @var int $Geboortedatum
     * @var int $BSN
     * @var string $SoortDocument
     * @var string $Onderwerp
     * @var string $Omschrijving
     * @var string $DocumentNaam
     * @var string $Document
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
     * @return TDocument
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

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
     * @return TDocument
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
    public function getAchternaam()
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return TDocument
     */
    public function withAchternaam($Achternaam)
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
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
     * @return TDocument
     */
    public function withGeslacht($Geslacht)
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
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
     * @return TDocument
     */
    public function withGeboortedatum($Geboortedatum)
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
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
     * @return TDocument
     */
    public function withBSN($BSN)
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortDocument()
    {
        return $this->SoortDocument;
    }

    /**
     * @param string $SoortDocument
     * @return TDocument
     */
    public function withSoortDocument($SoortDocument)
    {
        $new = clone $this;
        $new->SoortDocument = $SoortDocument;

        return $new;
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
     * @return TDocument
     */
    public function withOnderwerp($Onderwerp)
    {
        $new = clone $this;
        $new->Onderwerp = $Onderwerp;

        return $new;
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
     * @return TDocument
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
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
     * @return TDocument
     */
    public function withDocumentNaam($DocumentNaam)
    {
        $new = clone $this;
        $new->DocumentNaam = $DocumentNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param string $Document
     * @return TDocument
     */
    public function withDocument($Document)
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }


}

