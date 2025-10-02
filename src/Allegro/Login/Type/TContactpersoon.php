<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TContactpersoon
{
    /**
     * @var int
     */
    private int $Code;

    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var string
     */
    private string $Voorvoegsels;

    /**
     * @var string
     */
    private string $Voornaam;

    /**
     * @var string
     */
    private string $Voorletters;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $GeboorteDatum;

    /**
     * @var string
     */
    private string $Telefoon;

    /**
     * @var string
     */
    private string $Email;

    /**
     * @var bool
     */
    private bool $NogBevestigen;

    /**
     * @var bool
     */
    private bool $Actief;

    /**
     * @var bool
     */
    private bool $MagAanmelden;

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
    public function getAchternaam() : string
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return static
     */
    public function withAchternaam(string $Achternaam) : static
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels() : string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(string $Voorvoegsels) : static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornaam() : string
    {
        return $this->Voornaam;
    }

    /**
     * @param string $Voornaam
     * @return static
     */
    public function withVoornaam(string $Voornaam) : static
    {
        $new = clone $this;
        $new->Voornaam = $Voornaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters() : string
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return static
     */
    public function withVoorletters(string $Voorletters) : static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGeboorteDatum() : \DateTimeInterface
    {
        return $this->GeboorteDatum;
    }

    /**
     * @param \DateTimeInterface $GeboorteDatum
     * @return static
     */
    public function withGeboorteDatum(\DateTimeInterface $GeboorteDatum) : static
    {
        $new = clone $this;
        $new->GeboorteDatum = $GeboorteDatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoon() : string
    {
        return $this->Telefoon;
    }

    /**
     * @param string $Telefoon
     * @return static
     */
    public function withTelefoon(string $Telefoon) : static
    {
        $new = clone $this;
        $new->Telefoon = $Telefoon;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return static
     */
    public function withEmail(string $Email) : static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNogBevestigen() : bool
    {
        return $this->NogBevestigen;
    }

    /**
     * @param bool $NogBevestigen
     * @return static
     */
    public function withNogBevestigen(bool $NogBevestigen) : static
    {
        $new = clone $this;
        $new->NogBevestigen = $NogBevestigen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActief() : bool
    {
        return $this->Actief;
    }

    /**
     * @param bool $Actief
     * @return static
     */
    public function withActief(bool $Actief) : static
    {
        $new = clone $this;
        $new->Actief = $Actief;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMagAanmelden() : bool
    {
        return $this->MagAanmelden;
    }

    /**
     * @param bool $MagAanmelden
     * @return static
     */
    public function withMagAanmelden(bool $MagAanmelden) : static
    {
        $new = clone $this;
        $new->MagAanmelden = $MagAanmelden;

        return $new;
    }
}

