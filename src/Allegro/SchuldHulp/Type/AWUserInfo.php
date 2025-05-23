<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class AWUserInfo implements RequestInterface
{

    /**
     * @var string
     */
    private $LoginType;

    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var string
     */
    private $Naam;

    /**
     * @var DateTimeInterface
     */
    private $LaatsteLogin;

    /**
     * @var string
     */
    private $Autorisaties;

    /**
     * @var int
     */
    private $ExtraInfo;

    /**
     * @var string
     */
    private $ExtraInfoOmschrijving;

    /**
     * @var bool
     */
    private $WachtwoordWijzigen;

    /**
     * Constructor
     *
     * @var string $LoginType
     * @var int $RelatieCode
     * @var string $Naam
     * @var DateTimeInterface $LaatsteLogin
     * @var string $Autorisaties
     * @var int $ExtraInfo
     * @var string $ExtraInfoOmschrijving
     * @var bool $WachtwoordWijzigen
     */
    public function __construct($LoginType, $RelatieCode, $Naam, $LaatsteLogin, $Autorisaties, $ExtraInfo, $ExtraInfoOmschrijving, $WachtwoordWijzigen)
    {
        $this->LoginType = $LoginType;
        $this->RelatieCode = $RelatieCode;
        $this->Naam = $Naam;
        $this->LaatsteLogin = $LaatsteLogin;
        $this->Autorisaties = $Autorisaties;
        $this->ExtraInfo = $ExtraInfo;
        $this->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;
        $this->WachtwoordWijzigen = $WachtwoordWijzigen;
    }

    /**
     * @return string
     */
    public function getLoginType()
    {
        return $this->LoginType;
    }

    /**
     * @param string $LoginType
     * @return AWUserInfo
     */
    public function withLoginType($LoginType)
    {
        $new = clone $this;
        $new->LoginType = $LoginType;

        return $new;
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
     * @return AWUserInfo
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
     * @return AWUserInfo
     */
    public function withNaam($Naam)
    {
        $new = clone $this;
        $new->Naam = $Naam;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getLaatsteLogin()
    {
        return $this->LaatsteLogin;
    }

    /**
     * @param DateTimeInterface $LaatsteLogin
     * @return AWUserInfo
     */
    public function withLaatsteLogin($LaatsteLogin)
    {
        $new = clone $this;
        $new->LaatsteLogin = $LaatsteLogin;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutorisaties()
    {
        return $this->Autorisaties;
    }

    /**
     * @param string $Autorisaties
     * @return AWUserInfo
     */
    public function withAutorisaties($Autorisaties)
    {
        $new = clone $this;
        $new->Autorisaties = $Autorisaties;

        return $new;
    }

    /**
     * @return int
     */
    public function getExtraInfo()
    {
        return $this->ExtraInfo;
    }

    /**
     * @param int $ExtraInfo
     * @return AWUserInfo
     */
    public function withExtraInfo($ExtraInfo)
    {
        $new = clone $this;
        $new->ExtraInfo = $ExtraInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtraInfoOmschrijving()
    {
        return $this->ExtraInfoOmschrijving;
    }

    /**
     * @param string $ExtraInfoOmschrijving
     * @return AWUserInfo
     */
    public function withExtraInfoOmschrijving($ExtraInfoOmschrijving)
    {
        $new = clone $this;
        $new->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWachtwoordWijzigen()
    {
        return $this->WachtwoordWijzigen;
    }

    /**
     * @param bool $WachtwoordWijzigen
     * @return AWUserInfo
     */
    public function withWachtwoordWijzigen($WachtwoordWijzigen)
    {
        $new = clone $this;
        $new->WachtwoordWijzigen = $WachtwoordWijzigen;

        return $new;
    }


}

