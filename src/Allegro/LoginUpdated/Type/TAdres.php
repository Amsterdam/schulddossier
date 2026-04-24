<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TAdres
{
    /**
     * @var string
     */
    private string $Straat;

    /**
     * @var string
     */
    private string $Huisnr;

    /**
     * @var string
     */
    private string $HuisnrToev;

    /**
     * @var string
     */
    private string $Postcode;

    /**
     * @var int
     */
    private int $PC;

    /**
     * @var string
     */
    private string $PL;

    /**
     * @var string
     */
    private string $Woonplaats;

    /**
     * @var string
     */
    private string $LandNaam;

    /**
     * @return string
     */
    public function getStraat(): string
    {
        return $this->Straat;
    }

    /**
     * @param string $Straat
     * @return static
     */
    public function withStraat(string $Straat): static
    {
        $new = clone $this;
        $new->Straat = $Straat;

        return $new;
    }

    /**
     * @return string
     */
    public function getHuisnr(): string
    {
        return $this->Huisnr;
    }

    /**
     * @param string $Huisnr
     * @return static
     */
    public function withHuisnr(string $Huisnr): static
    {
        $new = clone $this;
        $new->Huisnr = $Huisnr;

        return $new;
    }

    /**
     * @return string
     */
    public function getHuisnrToev(): string
    {
        return $this->HuisnrToev;
    }

    /**
     * @param string $HuisnrToev
     * @return static
     */
    public function withHuisnrToev(string $HuisnrToev): static
    {
        $new = clone $this;
        $new->HuisnrToev = $HuisnrToev;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return static
     */
    public function withPostcode(string $Postcode): static
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

        return $new;
    }

    /**
     * @return int
     */
    public function getPC(): int
    {
        return $this->PC;
    }

    /**
     * @param int $PC
     * @return static
     */
    public function withPC(int $PC): static
    {
        $new = clone $this;
        $new->PC = $PC;

        return $new;
    }

    /**
     * @return string
     */
    public function getPL(): string
    {
        return $this->PL;
    }

    /**
     * @param string $PL
     * @return static
     */
    public function withPL(string $PL): static
    {
        $new = clone $this;
        $new->PL = $PL;

        return $new;
    }

    /**
     * @return string
     */
    public function getWoonplaats(): string
    {
        return $this->Woonplaats;
    }

    /**
     * @param string $Woonplaats
     * @return static
     */
    public function withWoonplaats(string $Woonplaats): static
    {
        $new = clone $this;
        $new->Woonplaats = $Woonplaats;

        return $new;
    }

    /**
     * @return string
     */
    public function getLandNaam(): string
    {
        return $this->LandNaam;
    }

    /**
     * @param string $LandNaam
     * @return static
     */
    public function withLandNaam(string $LandNaam): static
    {
        $new = clone $this;
        $new->LandNaam = $LandNaam;

        return $new;
    }
}

