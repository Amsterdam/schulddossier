<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class AWUserInfo extends UserInfo
{
    /**
     * @var string
     */
    private string $LoginType;

    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var string
     */
    private string $Naam;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $LaatsteLogin;

    /**
     * @var string
     */
    private string $Autorisaties;

    /**
     * @var int
     */
    private int $ExtraInfo;

    /**
     * @var string
     */
    private string $ExtraInfoOmschrijving;

    /**
     * @var bool
     */
    private bool $WachtwoordWijzigen;

    /**
     * @return string
     */
    public function getLoginType() : string
    {
        return $this->LoginType;
    }

    /**
     * @param string $LoginType
     * @return static
     */
    public function withLoginType(string $LoginType) : static
    {
        $new = clone $this;
        $new->LoginType = $LoginType;

        return $new;
    }

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
     * @return \DateTimeInterface
     */
    public function getLaatsteLogin() : \DateTimeInterface
    {
        return $this->LaatsteLogin;
    }

    /**
     * @param \DateTimeInterface $LaatsteLogin
     * @return static
     */
    public function withLaatsteLogin(\DateTimeInterface $LaatsteLogin) : static
    {
        $new = clone $this;
        $new->LaatsteLogin = $LaatsteLogin;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutorisaties() : string
    {
        return $this->Autorisaties;
    }

    /**
     * @param string $Autorisaties
     * @return static
     */
    public function withAutorisaties(string $Autorisaties) : static
    {
        $new = clone $this;
        $new->Autorisaties = $Autorisaties;

        return $new;
    }

    /**
     * @return int
     */
    public function getExtraInfo() : int
    {
        return $this->ExtraInfo;
    }

    /**
     * @param int $ExtraInfo
     * @return static
     */
    public function withExtraInfo(int $ExtraInfo) : static
    {
        $new = clone $this;
        $new->ExtraInfo = $ExtraInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtraInfoOmschrijving() : string
    {
        return $this->ExtraInfoOmschrijving;
    }

    /**
     * @param string $ExtraInfoOmschrijving
     * @return static
     */
    public function withExtraInfoOmschrijving(string $ExtraInfoOmschrijving) : static
    {
        $new = clone $this;
        $new->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWachtwoordWijzigen() : bool
    {
        return $this->WachtwoordWijzigen;
    }

    /**
     * @param bool $WachtwoordWijzigen
     * @return static
     */
    public function withWachtwoordWijzigen(bool $WachtwoordWijzigen) : static
    {
        $new = clone $this;
        $new->WachtwoordWijzigen = $WachtwoordWijzigen;

        return $new;
    }
}

