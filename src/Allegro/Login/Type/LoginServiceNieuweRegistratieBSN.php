<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceNieuweRegistratieBSN implements RequestInterface
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
     * @var int
     */
    private $BSN;

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
     * @var int $BSN
     * @var string $Achternaam
     * @var string $Email
     * @var string $Wachtwoord
     */
    public function __construct($RelatieCode, $GeboorteDatum, $BSN, $Achternaam, $Email, $Wachtwoord)
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
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return LoginServiceNieuweRegistratieBSN
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
     * @return LoginServiceNieuweRegistratieBSN
     */
    public function withGeboorteDatum($GeboorteDatum)
    {
        $new = clone $this;
        $new->GeboorteDatum = $GeboorteDatum;

        return $new;
    }

    /**
     * @return int
     */
    public function getBSN()
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return LoginServiceNieuweRegistratieBSN
     */
    public function withBSN($BSN)
    {
        $new = clone $this;
        $new->BSN = $BSN;

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
     * @return LoginServiceNieuweRegistratieBSN
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
     * @return LoginServiceNieuweRegistratieBSN
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
     * @return LoginServiceNieuweRegistratieBSN
     */
    public function withWachtwoord($Wachtwoord)
    {
        $new = clone $this;
        $new->Wachtwoord = $Wachtwoord;

        return $new;
    }
}
