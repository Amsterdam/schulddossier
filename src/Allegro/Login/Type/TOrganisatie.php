<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TOrganisatie
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
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $BezoekAdres = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $PostAdres = null;

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
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getBezoekAdres() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->BezoekAdres;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $BezoekAdres
     * @return static
     */
    public function withBezoekAdres(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $BezoekAdres) : static
    {
        $new = clone $this;
        $new->BezoekAdres = $BezoekAdres;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getPostAdres() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->PostAdres;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $PostAdres
     * @return static
     */
    public function withPostAdres(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $PostAdres) : static
    {
        $new = clone $this;
        $new->PostAdres = $PostAdres;

        return $new;
    }
}

