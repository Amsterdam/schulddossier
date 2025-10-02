<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TDocument implements RequestInterface
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $ContractVolgnummer;

    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var string
     */
    private string $Geslacht;

    /**
     * @var int
     */
    private int $Geboortedatum;

    /**
     * @var int
     */
    private int $BSN;

    /**
     * AW_aSoortDocument in AllegroWebPortierConst
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $SoortDocument;

    /**
     * @var string
     */
    private string $Onderwerp;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var string
     */
    private string $DocumentNaam;

    /**
     * @var mixed
     */
    private mixed $Document;

    /**
     * Constructor
     *
     * @param int $Relatiecode
     * @param int $ContractVolgnummer
     * @param string $Achternaam
     * @param string $Geslacht
     * @param int $Geboortedatum
     * @param int $BSN
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $SoortDocument
     * @param string $Onderwerp
     * @param string $Omschrijving
     * @param string $DocumentNaam
     * @param mixed $Document
     */
    public function __construct(int $Relatiecode, int $ContractVolgnummer, string $Achternaam, string $Geslacht, int $Geboortedatum, int $BSN, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $SoortDocument, string $Onderwerp, string $Omschrijving, string $DocumentNaam, mixed $Document)
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
    public function getAchternaam() : string
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return static
     */
    public function withAchternaam(string $Achternaam) : static
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeslacht() : string
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return static
     */
    public function withGeslacht(string $Geslacht) : static
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return int
     */
    public function getGeboortedatum() : int
    {
        return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return static
     */
    public function withGeboortedatum(int $Geboortedatum) : static
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
    }

    /**
     * @return int
     */
    public function getBSN() : int
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return static
     */
    public function withBSN(int $BSN) : static
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument
     */
    public function getSoortDocument() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument
    {
        return $this->SoortDocument;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $SoortDocument
     * @return static
     */
    public function withSoortDocument(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortDocument $SoortDocument) : static
    {
        $new = clone $this;
        $new->SoortDocument = $SoortDocument;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnderwerp() : string
    {
        return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return static
     */
    public function withOnderwerp(string $Onderwerp) : static
    {
        $new = clone $this;
        $new->Onderwerp = $Onderwerp;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving() : string
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return static
     */
    public function withOmschrijving(string $Omschrijving) : static
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentNaam() : string
    {
        return $this->DocumentNaam;
    }

    /**
     * @param string $DocumentNaam
     * @return static
     */
    public function withDocumentNaam(string $DocumentNaam) : static
    {
        $new = clone $this;
        $new->DocumentNaam = $DocumentNaam;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getDocument() : mixed
    {
        return $this->Document;
    }

    /**
     * @param mixed $Document
     * @return static
     */
    public function withDocument(mixed $Document) : static
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }
}

