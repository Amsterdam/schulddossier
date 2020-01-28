<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


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
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $BezoekAdres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $PostAdres;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var string $Naam
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $BezoekAdres
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $PostAdres
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getBezoekAdres()
    {
        return $this->BezoekAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $BezoekAdres
     * @return TOrganisatie
     */
    public function withBezoekAdres($BezoekAdres)
    {
        $new = clone $this;
        $new->BezoekAdres = $BezoekAdres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getPostAdres()
    {
        return $this->PostAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $PostAdres
     * @return TOrganisatie
     */
    public function withPostAdres($PostAdres)
    {
        $new = clone $this;
        $new->PostAdres = $PostAdres;

        return $new;
    }


}

