<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceNieuweRegistratie implements RequestInterface
{
    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var int
     */
    private $GeboorteDatum;

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var string
     */
    private $Email;

    /**
     * @var string
     */
    private $Wachtwoord;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var int $GeboorteDatum
     * @var string $Achternaam
     * @var string $Email
     * @var string $Wachtwoord
     */
    public function __construct($RelatieCode, $GeboorteDatum, $Achternaam, $Email, $Wachtwoord)
    {
        $this->RelatieCode = $RelatieCode;
        $this->GeboorteDatum = $GeboorteDatum;
        $this->Achternaam = $Achternaam;
        $this->Email = $Email;
        $this->Wachtwoord = $Wachtwoord;
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
     * @return LoginServiceNieuweRegistratie
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getGeboorteDatum()
    {
        return $this->GeboorteDatum;
    }

    /**
     * @param int $GeboorteDatum
     * @return LoginServiceNieuweRegistratie
     */
    public function withGeboorteDatum($GeboorteDatum)
    {
        $new = clone $this;
        $new->GeboorteDatum = $GeboorteDatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return LoginServiceNieuweRegistratie
     */
    public function withAchternaam($Achternaam)
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return LoginServiceNieuweRegistratie
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return string
     */
    public function getWachtwoord()
    {
        return $this->Wachtwoord;
    }

    /**
     * @param string $Wachtwoord
     * @return LoginServiceNieuweRegistratie
     */
    public function withWachtwoord($Wachtwoord)
    {
        $new = clone $this;
        $new->Wachtwoord = $Wachtwoord;

        return $new;
    }
}
