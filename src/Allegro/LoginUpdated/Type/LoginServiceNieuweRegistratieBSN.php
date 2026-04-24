<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceNieuweRegistratieBSN implements RequestInterface
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var int
     */
    private int $GeboorteDatum;

    /**
     * @var int
     */
    private int $BSN;

    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var string
     */
    private string $Email;

    /**
     * @var string
     */
    private string $Wachtwoord;

    /**
     * Constructor
     *
     * @param int $RelatieCode
     * @param int $GeboorteDatum
     * @param int $BSN
     * @param string $Achternaam
     * @param string $Email
     * @param string $Wachtwoord
     */
    public function __construct(int $RelatieCode, int $GeboorteDatum, int $BSN, string $Achternaam, string $Email, string $Wachtwoord)
    {
        $this->RelatieCode = $RelatieCode;
        $this->GeboorteDatum = $GeboorteDatum;
        $this->BSN = $BSN;
        $this->Achternaam = $Achternaam;
        $this->Email = $Email;
        $this->Wachtwoord = $Wachtwoord;
    }

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
     * @return int
     */
    public function getBSN(): int
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return static
     */
    public function withBSN(int $BSN): static
    {
        $new = clone $this;
        $new->BSN = $BSN;

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
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return static
     */
    public function withEmail(string $Email): static
    {
        $new = clone $this;
        $new->Email = $Email;

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

