<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TLijstOpdrachtgever implements RequestInterface
{

    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var string
     */
    private $Naam;

    /**
     * @var string
     */
    private $Vestigingsplaats;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var string $Naam
     * @var string $Vestigingsplaats
     */
    public function __construct($RelatieCode, $Naam, $Vestigingsplaats)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Naam = $Naam;
        $this->Vestigingsplaats = $Vestigingsplaats;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TLijstOpdrachtgever
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

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
     * @return TLijstOpdrachtgever
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
    public function getVestigingsplaats()
    {
        return $this->Vestigingsplaats;
    }

    /**
     * @param string $Vestigingsplaats
     * @return TLijstOpdrachtgever
     */
    public function withVestigingsplaats($Vestigingsplaats)
    {
        $new = clone $this;
        $new->Vestigingsplaats = $Vestigingsplaats;

        return $new;
    }


}

