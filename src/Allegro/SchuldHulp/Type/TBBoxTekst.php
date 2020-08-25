<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TBBoxTekst implements RequestInterface
{

    /**
     * @var int
     */
    private $Code;

    /**
     * @var string
     */
    private $Naam;

    /**
     * @var string
     */
    private $Onderwerp;

    /**
     * @var string
     */
    private $Tekst;

    /**
     * Constructor
     *
     * @var int $Code
     * @var string $Naam
     * @var string $Onderwerp
     * @var string $Tekst
     */
    public function __construct($Code, $Naam, $Onderwerp, $Tekst)
    {
        $this->Code = $Code;
        $this->Naam = $Naam;
        $this->Onderwerp = $Onderwerp;
        $this->Tekst = $Tekst;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return TBBoxTekst
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaam()
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return TBBoxTekst
     */
    public function withNaam($Naam)
    {
        $new = clone $this;
        $new->Naam = $Naam;

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
     * @return TBBoxTekst
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
    public function getTekst()
    {
        return $this->Tekst;
    }

    /**
     * @param string $Tekst
     * @return TBBoxTekst
     */
    public function withTekst($Tekst)
    {
        $new = clone $this;
        $new->Tekst = $Tekst;

        return $new;
    }


}

