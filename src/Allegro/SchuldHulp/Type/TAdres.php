<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAdres implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $Straat = null;

    /**
     * @var null | string
     */
    private ?string $Huisnr = null;

    /**
     * @var null | string
     */
    private ?string $HuisnrToev = null;

    /**
     * @var null | string
     */
    private ?string $Postcode = null;

    /**
     * @var null | int
     */
    private ?int $PC = null;

    /**
     * @var null | string
     */
    private ?string $PL = null;

    /**
     * @var null | string
     */
    private ?string $Woonplaats = null;

    /**
     * @var null | string
     */
    private ?string $LandNaam = null;

    /**
     * Constructor
     *
     * @param null | string $Straat
     * @param null | string $Huisnr
     * @param null | string $HuisnrToev
     * @param null | string $Postcode
     * @param null | int $PC
     * @param null | string $PL
     * @param null | string $Woonplaats
     * @param null | string $LandNaam
     */
    public function __construct(?string $Straat, ?string $Huisnr, ?string $HuisnrToev, ?string $Postcode, ?int $PC, ?string $PL, ?string $Woonplaats, ?string $LandNaam)
    {
        $this->Straat = $Straat;
        $this->Huisnr = $Huisnr;
        $this->HuisnrToev = $HuisnrToev;
        $this->Postcode = $Postcode;
        $this->PC = $PC;
        $this->PL = $PL;
        $this->Woonplaats = $Woonplaats;
        $this->LandNaam = $LandNaam;
    }

    /**
     * @return null | string
     */
    public function getStraat() : ?string
    {
        return $this->Straat;
    }

    /**
     * @param null | string $Straat
     * @return static
     */
    public function withStraat(?string $Straat) : static
    {
        $new = clone $this;
        $new->Straat = $Straat;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHuisnr() : ?string
    {
        return $this->Huisnr;
    }

    /**
     * @param null | string $Huisnr
     * @return static
     */
    public function withHuisnr(?string $Huisnr) : static
    {
        $new = clone $this;
        $new->Huisnr = $Huisnr;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHuisnrToev() : ?string
    {
        return $this->HuisnrToev;
    }

    /**
     * @param null | string $HuisnrToev
     * @return static
     */
    public function withHuisnrToev(?string $HuisnrToev) : static
    {
        $new = clone $this;
        $new->HuisnrToev = $HuisnrToev;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPostcode() : ?string
    {
        return $this->Postcode;
    }

    /**
     * @param null | string $Postcode
     * @return static
     */
    public function withPostcode(?string $Postcode) : static
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPC() : ?int
    {
        return $this->PC;
    }

    /**
     * @param null | int $PC
     * @return static
     */
    public function withPC(?int $PC) : static
    {
        $new = clone $this;
        $new->PC = $PC;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPL() : ?string
    {
        return $this->PL;
    }

    /**
     * @param null | string $PL
     * @return static
     */
    public function withPL(?string $PL) : static
    {
        $new = clone $this;
        $new->PL = $PL;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWoonplaats() : ?string
    {
        return $this->Woonplaats;
    }

    /**
     * @param null | string $Woonplaats
     * @return static
     */
    public function withWoonplaats(?string $Woonplaats) : static
    {
        $new = clone $this;
        $new->Woonplaats = $Woonplaats;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLandNaam() : ?string
    {
        return $this->LandNaam;
    }

    /**
     * @param null | string $LandNaam
     * @return static
     */
    public function withLandNaam(?string $LandNaam) : static
    {
        $new = clone $this;
        $new->LandNaam = $LandNaam;

        return $new;
    }
}

