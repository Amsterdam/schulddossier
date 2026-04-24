<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceNieuwContact implements RequestInterface
{
    /**
     * @var int
     */
    private int $OrganisatieCode;

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
     * @var string
     */
    private string $Geslacht;

    /**
     * @var int
     */
    private int $GeboorteDatum;

    /**
     * @var string
     */
    private string $Telefoonnummer;

    /**
     * @var string
     */
    private string $EmailAdres;

    /**
     * @var string
     */
    private string $Wachtwoord;

    /**
     * Constructor
     *
     * @param int $OrganisatieCode
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Voornaam
     * @param string $Voorletters
     * @param string $Geslacht
     * @param int $GeboorteDatum
     * @param string $Telefoonnummer
     * @param string $EmailAdres
     * @param string $Wachtwoord
     */
    public function __construct(int $OrganisatieCode, string $Achternaam, string $Voorvoegsels, string $Voornaam, string $Voorletters, string $Geslacht, int $GeboorteDatum, string $Telefoonnummer, string $EmailAdres, string $Wachtwoord)
    {
        $this->OrganisatieCode = $OrganisatieCode;
        $this->Achternaam = $Achternaam;
        $this->Voorvoegsels = $Voorvoegsels;
        $this->Voornaam = $Voornaam;
        $this->Voorletters = $Voorletters;
        $this->Geslacht = $Geslacht;
        $this->GeboorteDatum = $GeboorteDatum;
        $this->Telefoonnummer = $Telefoonnummer;
        $this->EmailAdres = $EmailAdres;
        $this->Wachtwoord = $Wachtwoord;
    }

    /**
     * @return int
     */
    public function getOrganisatieCode(): int
    {
        return $this->OrganisatieCode;
    }

    /**
     * @param int $OrganisatieCode
     * @return static
     */
    public function withOrganisatieCode(int $OrganisatieCode): static
    {
        $new = clone $this;
        $new->OrganisatieCode = $OrganisatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAchternaam(): string
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return static
     */
    public function withAchternaam(string $Achternaam): static
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels(): string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(string $Voorvoegsels): static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornaam(): string
    {
        return $this->Voornaam;
    }

    /**
     * @param string $Voornaam
     * @return static
     */
    public function withVoornaam(string $Voornaam): static
    {
        $new = clone $this;
        $new->Voornaam = $Voornaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters(): string
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return static
     */
    public function withVoorletters(string $Voorletters): static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeslacht(): string
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return static
     */
    public function withGeslacht(string $Geslacht): static
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return int
     */
    public function getGeboorteDatum(): int
    {
        return $this->GeboorteDatum;
    }

    /**
     * @param int $GeboorteDatum
     * @return static
     */
    public function withGeboorteDatum(int $GeboorteDatum): static
    {
        $new = clone $this;
        $new->GeboorteDatum = $GeboorteDatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoonnummer(): string
    {
        return $this->Telefoonnummer;
    }

    /**
     * @param string $Telefoonnummer
     * @return static
     */
    public function withTelefoonnummer(string $Telefoonnummer): static
    {
        $new = clone $this;
        $new->Telefoonnummer = $Telefoonnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmailAdres(): string
    {
        return $this->EmailAdres;
    }

    /**
     * @param string $EmailAdres
     * @return static
     */
    public function withEmailAdres(string $EmailAdres): static
    {
        $new = clone $this;
        $new->EmailAdres = $EmailAdres;

        return $new;
    }

    /**
     * @return string
     */
    public function getWachtwoord(): string
    {
        return $this->Wachtwoord;
    }

    /**
     * @param string $Wachtwoord
     * @return static
     */
    public function withWachtwoord(string $Wachtwoord): static
    {
        $new = clone $this;
        $new->Wachtwoord = $Wachtwoord;

        return $new;
    }
}

