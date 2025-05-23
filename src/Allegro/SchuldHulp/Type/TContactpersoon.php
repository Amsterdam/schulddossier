<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TContactpersoon implements RequestInterface
{

    /**
     * @var int
     */
    private $Code;

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var string
     */
    private $Voorvoegsels;

    /**
     * @var string
     */
    private $Voornaam;

    /**
     * @var string
     */
    private $Voorletters;

    /**
     * @var DateTimeInterface
     */
    private $GeboorteDatum;

    /**
     * @var string
     */
    private $Telefoon;

    /**
     * @var string
     */
    private $Email;

    /**
     * @var bool
     */
    private $NogBevestigen;

    /**
     * @var bool
     */
    private $Actief;

    /**
     * @var bool
     */
    private $MagAanmelden;

    /**
     * Constructor
     *
     * @var int $Code
     * @var string $Achternaam
     * @var string $Voorvoegsels
     * @var string $Voornaam
     * @var string $Voorletters
     * @var DateTimeInterface $GeboorteDatum
     * @var string $Telefoon
     * @var string $Email
     * @var bool $NogBevestigen
     * @var bool $Actief
     * @var bool $MagAanmelden
     */
    public function __construct($Code, $Achternaam, $Voorvoegsels, $Voornaam, $Voorletters, $GeboorteDatum, $Telefoon, $Email, $NogBevestigen, $Actief, $MagAanmelden)
    {
        $this->Code = $Code;
        $this->Achternaam = $Achternaam;
        $this->Voorvoegsels = $Voorvoegsels;
        $this->Voornaam = $Voornaam;
        $this->Voorletters = $Voorletters;
        $this->GeboorteDatum = $GeboorteDatum;
        $this->Telefoon = $Telefoon;
        $this->Email = $Email;
        $this->NogBevestigen = $NogBevestigen;
        $this->Actief = $Actief;
        $this->MagAanmelden = $MagAanmelden;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return TContactpersoon
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

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
     * @return TContactpersoon
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
    public function getVoorvoegsels()
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return TContactpersoon
     */
    public function withVoorvoegsels($Voorvoegsels)
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornaam()
    {
        return $this->Voornaam;
    }

    /**
     * @param string $Voornaam
     * @return TContactpersoon
     */
    public function withVoornaam($Voornaam)
    {
        $new = clone $this;
        $new->Voornaam = $Voornaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters()
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return TContactpersoon
     */
    public function withVoorletters($Voorletters)
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getGeboorteDatum()
    {
        return $this->GeboorteDatum;
    }

    /**
     * @param DateTimeInterface $GeboorteDatum
     * @return TContactpersoon
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
    public function getTelefoon()
    {
        return $this->Telefoon;
    }

    /**
     * @param string $Telefoon
     * @return TContactpersoon
     */
    public function withTelefoon($Telefoon)
    {
        $new = clone $this;
        $new->Telefoon = $Telefoon;

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
     * @return TContactpersoon
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNogBevestigen()
    {
        return $this->NogBevestigen;
    }

    /**
     * @param bool $NogBevestigen
     * @return TContactpersoon
     */
    public function withNogBevestigen($NogBevestigen)
    {
        $new = clone $this;
        $new->NogBevestigen = $NogBevestigen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActief()
    {
        return $this->Actief;
    }

    /**
     * @param bool $Actief
     * @return TContactpersoon
     */
    public function withActief($Actief)
    {
        $new = clone $this;
        $new->Actief = $Actief;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMagAanmelden()
    {
        return $this->MagAanmelden;
    }

    /**
     * @param bool $MagAanmelden
     * @return TContactpersoon
     */
    public function withMagAanmelden($MagAanmelden)
    {
        $new = clone $this;
        $new->MagAanmelden = $MagAanmelden;

        return $new;
    }


}

