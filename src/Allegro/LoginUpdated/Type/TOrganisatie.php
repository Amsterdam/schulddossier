<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

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
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $BezoekAdres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $PostAdres;

    /**
     * @return int
     */
    public function getRelatieCode(): int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode): static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaam(): string
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return static
     */
    public function withNaam(string $Naam): static
    {
        $new = clone $this;
        $new->Naam = $Naam;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
     */
    public function getBezoekAdres(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
    {
        return $this->BezoekAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $BezoekAdres
     * @return static
     */
    public function withBezoekAdres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $BezoekAdres): static
    {
        $new = clone $this;
        $new->BezoekAdres = $BezoekAdres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
     */
    public function getPostAdres(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
    {
        return $this->PostAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $PostAdres
     * @return static
     */
    public function withPostAdres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $PostAdres): static
    {
        $new = clone $this;
        $new->PostAdres = $PostAdres;

        return $new;
    }
}

