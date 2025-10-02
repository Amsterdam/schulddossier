<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TLijstOpdrachtgever implements RequestInterface
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var string
     */
    private string $Naam;

    /**
     * @var string
     */
    private string $Vestigingsplaats;

    /**
     * Constructor
     *
     * @param int $RelatieCode
     * @param string $Naam
     * @param string $Vestigingsplaats
     */
    public function __construct(int $RelatieCode, string $Naam, string $Vestigingsplaats)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Naam = $Naam;
        $this->Vestigingsplaats = $Vestigingsplaats;
    }

    /**
     * @return int
     */
    public function getRelatieCode() : int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode) : static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

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
    public function getVestigingsplaats() : string
    {
        return $this->Vestigingsplaats;
    }

    /**
     * @param string $Vestigingsplaats
     * @return static
     */
    public function withVestigingsplaats(string $Vestigingsplaats) : static
    {
        $new = clone $this;
        $new->Vestigingsplaats = $Vestigingsplaats;

        return $new;
    }
}

