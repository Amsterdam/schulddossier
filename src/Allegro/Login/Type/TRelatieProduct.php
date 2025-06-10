<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TRelatieProduct implements RequestInterface
{

    /**
     * @var string
     */
    private $Contractnummer;

    /**
     * @var string
     */
    private $Product;

    /**
     * @var string
     */
    private $NaamProduct;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var DateTimeInterface
     */
    private $Startdatum;

    /**
     * @var DateTimeInterface
     */
    private $Einddatum;

    /**
     * @var string
     */
    private $Eindstatus;

    /**
     * @var TMedewerker
     */
    private $Medewerker;

    /**
     * @var string
     */
    private $Team;

    /**
     * Constructor
     *
     * @var string $Contractnummer
     * @var string $Product
     * @var string $NaamProduct
     * @var string $Status
     * @var DateTimeInterface $Startdatum
     * @var DateTimeInterface $Einddatum
     * @var string $Eindstatus
     * @var TMedewerker $Medewerker
     * @var string $Team
     */
    public function __construct($Contractnummer, $Product, $NaamProduct, $Status, $Startdatum, $Einddatum, $Eindstatus, $Medewerker, $Team)
    {
        $this->Contractnummer = $Contractnummer;
        $this->Product = $Product;
        $this->NaamProduct = $NaamProduct;
        $this->Status = $Status;
        $this->Startdatum = $Startdatum;
        $this->Einddatum = $Einddatum;
        $this->Eindstatus = $Eindstatus;
        $this->Medewerker = $Medewerker;
        $this->Team = $Team;
    }

    /**
     * @return string
     */
    public function getContractnummer()
    {
        return $this->Contractnummer;
    }

    /**
     * @param string $Contractnummer
     * @return TRelatieProduct
     */
    public function withContractnummer($Contractnummer)
    {
        $new = clone $this;
        $new->Contractnummer = $Contractnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param string $Product
     * @return TRelatieProduct
     */
    public function withProduct($Product)
    {
        $new = clone $this;
        $new->Product = $Product;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamProduct()
    {
        return $this->NaamProduct;
    }

    /**
     * @param string $NaamProduct
     * @return TRelatieProduct
     */
    public function withNaamProduct($NaamProduct)
    {
        $new = clone $this;
        $new->NaamProduct = $NaamProduct;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return TRelatieProduct
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getStartdatum()
    {
        return $this->Startdatum;
    }

    /**
     * @param DateTimeInterface $Startdatum
     * @return TRelatieProduct
     */
    public function withStartdatum($Startdatum)
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getEinddatum()
    {
        return $this->Einddatum;
    }

    /**
     * @param DateTimeInterface $Einddatum
     * @return TRelatieProduct
     */
    public function withEinddatum($Einddatum)
    {
        $new = clone $this;
        $new->Einddatum = $Einddatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getEindstatus()
    {
        return $this->Eindstatus;
    }

    /**
     * @param string $Eindstatus
     * @return TRelatieProduct
     */
    public function withEindstatus($Eindstatus)
    {
        $new = clone $this;
        $new->Eindstatus = $Eindstatus;

        return $new;
    }

    /**
     * @return TMedewerker
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param TMedewerker $Medewerker
     * @return TRelatieProduct
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
        return $this->Team;
    }

    /**
     * @param string $Team
     * @return TRelatieProduct
     */
    public function withTeam($Team)
    {
        $new = clone $this;
        $new->Team = $Team;

        return $new;
    }


}

