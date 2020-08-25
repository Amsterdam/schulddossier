<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TRC implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader
     */
    private $InfoHeader;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var int
     */
    private $Rentecode;

    /**
     * @var string
     */
    private $RentecodeOmschrijving;

    /**
     * @var \DateTimeInterface
     */
    private $TabelIngangsdatum;

    /**
     * @var float
     */
    private $RentepercentagePositief;

    /**
     * @var float
     */
    private $RentepercentageNegatief;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RCJaarrenteArray
     */
    private $Jaarrente;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader $InfoHeader
     * @var string $Medewerker
     * @var int $Rentecode
     * @var string $RentecodeOmschrijving
     * @var \DateTimeInterface $TabelIngangsdatum
     * @var float $RentepercentagePositief
     * @var float $RentepercentageNegatief
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RCJaarrenteArray $Jaarrente
     */
    public function __construct($InfoHeader, $Medewerker, $Rentecode, $RentecodeOmschrijving, $TabelIngangsdatum, $RentepercentagePositief, $RentepercentageNegatief, $Jaarrente)
    {
        $this->InfoHeader = $InfoHeader;
        $this->Medewerker = $Medewerker;
        $this->Rentecode = $Rentecode;
        $this->RentecodeOmschrijving = $RentecodeOmschrijving;
        $this->TabelIngangsdatum = $TabelIngangsdatum;
        $this->RentepercentagePositief = $RentepercentagePositief;
        $this->RentepercentageNegatief = $RentepercentageNegatief;
        $this->Jaarrente = $Jaarrente;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader
     */
    public function getInfoHeader()
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader $InfoHeader
     * @return TRC
     */
    public function withInfoHeader($InfoHeader)
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return TRC
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return int
     */
    public function getRentecode()
    {
        return $this->Rentecode;
    }

    /**
     * @param int $Rentecode
     * @return TRC
     */
    public function withRentecode($Rentecode)
    {
        $new = clone $this;
        $new->Rentecode = $Rentecode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRentecodeOmschrijving()
    {
        return $this->RentecodeOmschrijving;
    }

    /**
     * @param string $RentecodeOmschrijving
     * @return TRC
     */
    public function withRentecodeOmschrijving($RentecodeOmschrijving)
    {
        $new = clone $this;
        $new->RentecodeOmschrijving = $RentecodeOmschrijving;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTabelIngangsdatum()
    {
        return $this->TabelIngangsdatum;
    }

    /**
     * @param \DateTimeInterface $TabelIngangsdatum
     * @return TRC
     */
    public function withTabelIngangsdatum($TabelIngangsdatum)
    {
        $new = clone $this;
        $new->TabelIngangsdatum = $TabelIngangsdatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getRentepercentagePositief()
    {
        return $this->RentepercentagePositief;
    }

    /**
     * @param float $RentepercentagePositief
     * @return TRC
     */
    public function withRentepercentagePositief($RentepercentagePositief)
    {
        $new = clone $this;
        $new->RentepercentagePositief = $RentepercentagePositief;

        return $new;
    }

    /**
     * @return float
     */
    public function getRentepercentageNegatief()
    {
        return $this->RentepercentageNegatief;
    }

    /**
     * @param float $RentepercentageNegatief
     * @return TRC
     */
    public function withRentepercentageNegatief($RentepercentageNegatief)
    {
        $new = clone $this;
        $new->RentepercentageNegatief = $RentepercentageNegatief;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RCJaarrenteArray
     */
    public function getJaarrente()
    {
        return $this->Jaarrente;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RCJaarrenteArray $Jaarrente
     * @return TRC
     */
    public function withJaarrente($Jaarrente)
    {
        $new = clone $this;
        $new->Jaarrente = $Jaarrente;

        return $new;
    }


}

