<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TOrganisatie implements RequestInterface
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
     * @var TAdres
     */
    private $BezoekAdres;

    /**
     * @var TAdres
     */
    private $PostAdres;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var string $Naam
     * @var TAdres $BezoekAdres
     * @var TAdres $PostAdres
     */
    public function __construct($RelatieCode, $Naam, $BezoekAdres, $PostAdres)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Naam = $Naam;
        $this->BezoekAdres = $BezoekAdres;
        $this->PostAdres = $PostAdres;
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
     * @return TOrganisatie
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
     * @return TOrganisatie
     */
    public function withNaam($Naam)
    {
        $new = clone $this;
        $new->Naam = $Naam;

        return $new;
    }

    /**
     * @return TAdres
     */
    public function getBezoekAdres()
    {
        return $this->BezoekAdres;
    }

    /**
     * @param TAdres $BezoekAdres
     * @return TOrganisatie
     */
    public function withBezoekAdres($BezoekAdres)
    {
        $new = clone $this;
        $new->BezoekAdres = $BezoekAdres;

        return $new;
    }

    /**
     * @return TAdres
     */
    public function getPostAdres()
    {
        return $this->PostAdres;
    }

    /**
     * @param TAdres $PostAdres
     * @return TOrganisatie
     */
    public function withPostAdres($PostAdres)
    {
        $new = clone $this;
        $new->PostAdres = $PostAdres;

        return $new;
    }


}

