<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxTekst implements RequestInterface
{
    /**
     * @var int
     */
    private int $Code;

    /**
     * @var string
     */
    private string $Naam;

    /**
     * @var string
     */
    private string $Onderwerp;

    /**
     * @var string
     */
    private string $Tekst;

    /**
     * Constructor
     *
     * @param int $Code
     * @param string $Naam
     * @param string $Onderwerp
     * @param string $Tekst
     */
    public function __construct(int $Code, string $Naam, string $Onderwerp, string $Tekst)
    {
        $this->Code = $Code;
        $this->Naam = $Naam;
        $this->Onderwerp = $Onderwerp;
        $this->Tekst = $Tekst;
    }

    /**
     * @return int
     */
    public function getCode() : int
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return static
     */
    public function withCode(int $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaam() : string
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return static
     */
    public function withNaam(string $Naam) : static
    {
        $new = clone $this;
        $new->Naam = $Naam;

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
    public function getTekst() : string
    {
        return $this->Tekst;
    }

    /**
     * @param string $Tekst
     * @return static
     */
    public function withTekst(string $Tekst) : static
    {
        $new = clone $this;
        $new->Tekst = $Tekst;

        return $new;
    }
}

