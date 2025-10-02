<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TKind implements RequestInterface
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
     * Constructor
     *
     * @param int $UniekVolgnummer
     * @param string $Voornaam
     * @param string $Achternaam
     * @param \DateTimeInterface $Geboortedatum
     * @param string $Activiteit
     * @param bool $MeetelKind
     */
    public function __construct(int $UniekVolgnummer, string $Voornaam, string $Achternaam, \DateTimeInterface $Geboortedatum, string $Activiteit, bool $MeetelKind)
    {
        $this->UniekVolgnummer = $UniekVolgnummer;
        $this->Voornaam = $Voornaam;
        $this->Achternaam = $Achternaam;
        $this->Geboortedatum = $Geboortedatum;
        $this->Activiteit = $Activiteit;
        $this->MeetelKind = $MeetelKind;
    }

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

