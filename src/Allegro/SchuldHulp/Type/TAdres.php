<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAdres implements RequestInterface
{
    /**
     * @var string
     */
    private $Straat;

    /**
     * @var string
     */
    private $Huisnr;

    /**
     * @var string
     */
    private $HuisnrToev;

    /**
     * @var string
     */
    private $Postcode;

    /**
     * @var int
     */
    private $PC;

    /**
     * @var string
     */
    private $PL;

    /**
     * @var string
     */
    private $Woonplaats;

    /**
     * @var string
     */
    private $LandNaam;

    /**
     * Constructor
     *
     * @var string $Straat
     * @var string $Huisnr
     * @var string $HuisnrToev
     * @var string $Postcode
     * @var int $PC
     * @var string $PL
     * @var string $Woonplaats
     * @var string $LandNaam
     */
    public function __construct($Straat, $Huisnr, $HuisnrToev, $Postcode, $PC, $PL, $Woonplaats, $LandNaam)
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
     * @return string
     */
    public function getStraat()
    {
        return $this->Straat;
    }

    /**
     * @param string $Straat
     * @return TAdres
     */
    public function withStraat($Straat)
    {
        $new = clone $this;
        $new->Straat = $Straat;

        return $new;
    }

    /**
     * @return string
     */
    public function getHuisnr()
    {
        return $this->Huisnr;
    }

    /**
     * @param string $Huisnr
     * @return TAdres
     */
    public function withHuisnr($Huisnr)
    {
        $new = clone $this;
        $new->Huisnr = $Huisnr;

        return $new;
    }

    /**
     * @return string
     */
    public function getHuisnrToev()
    {
        return $this->HuisnrToev;
    }

    /**
     * @param string $HuisnrToev
     * @return TAdres
     */
    public function withHuisnrToev($HuisnrToev)
    {
        $new = clone $this;
        $new->HuisnrToev = $HuisnrToev;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return TAdres
     */
    public function withPostcode($Postcode)
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

        return $new;
    }

    /**
     * @return int
     */
    public function getPC()
    {
        return $this->PC;
    }

    /**
     * @param int $PC
     * @return TAdres
     */
    public function withPC($PC)
    {
        $new = clone $this;
        $new->PC = $PC;

        return $new;
    }

    /**
     * @return string
     */
    public function getPL()
    {
        return $this->PL;
    }

    /**
     * @param string $PL
     * @return TAdres
     */
    public function withPL($PL)
    {
        $new = clone $this;
        $new->PL = $PL;

        return $new;
    }

    /**
     * @return string
     */
    public function getWoonplaats()
    {
        return $this->Woonplaats;
    }

    /**
     * @param string $Woonplaats
     * @return TAdres
     */
    public function withWoonplaats($Woonplaats)
    {
        $new = clone $this;
        $new->Woonplaats = $Woonplaats;

        return $new;
    }

    /**
     * @return string
     */
    public function getLandNaam()
    {
        return $this->LandNaam;
    }

    /**
     * @param string $LandNaam
     * @return TAdres
     */
    public function withLandNaam($LandNaam)
    {
        $new = clone $this;
        $new->LandNaam = $LandNaam;

        return $new;
    }
}
