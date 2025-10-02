<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TRelatieProduct
{
    /**
     * @var string
     */
    private string $Contractnummer;

    /**
     * @var string
     */
    private string $Product;

    /**
     * @var string
     */
    private string $NaamProduct;

    /**
     * @var string
     */
    private string $Status;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Startdatum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Einddatum;

    /**
     * @var string
     */
    private string $Eindstatus;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker;

    /**
     * @var string
     */
    private string $Team;

    /**
     * @return string
     */
    public function getContractnummer() : string
    {
        return $this->Contractnummer;
    }

    /**
     * @param string $Contractnummer
     * @return static
     */
    public function withContractnummer(string $Contractnummer) : static
    {
        $new = clone $this;
        $new->Contractnummer = $Contractnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->Product;
    }

    /**
     * @param string $Product
     * @return static
     */
    public function withProduct(string $Product) : static
    {
        $new = clone $this;
        $new->Product = $Product;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamProduct() : string
    {
        return $this->NaamProduct;
    }

    /**
     * @param string $NaamProduct
     * @return static
     */
    public function withNaamProduct(string $NaamProduct) : static
    {
        $new = clone $this;
        $new->NaamProduct = $NaamProduct;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return static
     */
    public function withStatus(string $Status) : static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatum() : \DateTimeInterface
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return static
     */
    public function withStartdatum(\DateTimeInterface $Startdatum) : static
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEinddatum() : \DateTimeInterface
    {
        return $this->Einddatum;
    }

    /**
     * @param \DateTimeInterface $Einddatum
     * @return static
     */
    public function withEinddatum(\DateTimeInterface $Einddatum) : static
    {
        $new = clone $this;
        $new->Einddatum = $Einddatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getEindstatus() : string
    {
        return $this->Eindstatus;
    }

    /**
     * @param string $Eindstatus
     * @return static
     */
    public function withEindstatus(string $Eindstatus) : static
    {
        $new = clone $this;
        $new->Eindstatus = $Eindstatus;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->Medewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker
     * @return static
     */
    public function withMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeam() : string
    {
        return $this->Team;
    }

    /**
     * @param string $Team
     * @return static
     */
    public function withTeam(string $Team) : static
    {
        $new = clone $this;
        $new->Team = $Team;

        return $new;
    }
}

