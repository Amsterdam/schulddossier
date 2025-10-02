<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TKind
{
    /**
     * @var int
     */
    private int $UniekVolgnummer;

    /**
     * @var string
     */
    private string $Voornaam;

    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Geboortedatum;

    /**
     * @var string
     */
    private string $Activiteit;

    /**
     * @var bool
     */
    private bool $MeetelKind;

    /**
     * @return int
     */
    public function getUniekVolgnummer() : int
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return static
     */
    public function withUniekVolgnummer(int $UniekVolgnummer) : static
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

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
     * @return \DateTimeInterface
     */
    public function getGeboortedatum() : \DateTimeInterface
    {
        return $this->Geboortedatum;
    }

    /**
     * @param \DateTimeInterface $Geboortedatum
     * @return static
     */
    public function withGeboortedatum(\DateTimeInterface $Geboortedatum) : static
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getActiviteit() : string
    {
        return $this->Activiteit;
    }

    /**
     * @param string $Activiteit
     * @return static
     */
    public function withActiviteit(string $Activiteit) : static
    {
        $new = clone $this;
        $new->Activiteit = $Activiteit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMeetelKind() : bool
    {
        return $this->MeetelKind;
    }

    /**
     * @param bool $MeetelKind
     * @return static
     */
    public function withMeetelKind(bool $MeetelKind) : static
    {
        $new = clone $this;
        $new->MeetelKind = $MeetelKind;

        return $new;
    }
}

