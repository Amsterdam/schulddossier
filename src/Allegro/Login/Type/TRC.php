<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TRC
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader $InfoHeader;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var int
     */
    private int $Rentecode;

    /**
     * @var string
     */
    private string $RentecodeOmschrijving;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $TabelIngangsdatum;

    /**
     * @var float
     */
    private float $RentepercentagePositief;

    /**
     * @var float
     */
    private float $RentepercentageNegatief;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RCJaarrenteArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RCJaarrenteArray $Jaarrente;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader
     */
    public function getInfoHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader $InfoHeader
     * @return static
     */
    public function withInfoHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader $InfoHeader) : static
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker() : string
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return static
     */
    public function withMedewerker(string $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return int
     */
    public function getRentecode() : int
    {
        return $this->Rentecode;
    }

    /**
     * @param int $Rentecode
     * @return static
     */
    public function withRentecode(int $Rentecode) : static
    {
        $new = clone $this;
        $new->Rentecode = $Rentecode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRentecodeOmschrijving() : string
    {
        return $this->RentecodeOmschrijving;
    }

    /**
     * @param string $RentecodeOmschrijving
     * @return static
     */
    public function withRentecodeOmschrijving(string $RentecodeOmschrijving) : static
    {
        $new = clone $this;
        $new->RentecodeOmschrijving = $RentecodeOmschrijving;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTabelIngangsdatum() : \DateTimeInterface
    {
        return $this->TabelIngangsdatum;
    }

    /**
     * @param \DateTimeInterface $TabelIngangsdatum
     * @return static
     */
    public function withTabelIngangsdatum(\DateTimeInterface $TabelIngangsdatum) : static
    {
        $new = clone $this;
        $new->TabelIngangsdatum = $TabelIngangsdatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getRentepercentagePositief() : float
    {
        return $this->RentepercentagePositief;
    }

    /**
     * @param float $RentepercentagePositief
     * @return static
     */
    public function withRentepercentagePositief(float $RentepercentagePositief) : static
    {
        $new = clone $this;
        $new->RentepercentagePositief = $RentepercentagePositief;

        return $new;
    }

    /**
     * @return float
     */
    public function getRentepercentageNegatief() : float
    {
        return $this->RentepercentageNegatief;
    }

    /**
     * @param float $RentepercentageNegatief
     * @return static
     */
    public function withRentepercentageNegatief(float $RentepercentageNegatief) : static
    {
        $new = clone $this;
        $new->RentepercentageNegatief = $RentepercentageNegatief;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RCJaarrenteArray
     */
    public function getJaarrente() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RCJaarrenteArray
    {
        return $this->Jaarrente;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RCJaarrenteArray $Jaarrente
     * @return static
     */
    public function withJaarrente(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RCJaarrenteArray $Jaarrente) : static
    {
        $new = clone $this;
        $new->Jaarrente = $Jaarrente;

        return $new;
    }
}

