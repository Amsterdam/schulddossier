<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TKind implements RequestInterface
{
    /**
     * @var int
     */
    private $UniekVolgnummer;

    /**
     * @var string
     */
    private $Voornaam;

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var \DateTimeInterface
     */
    private $Geboortedatum;

    /**
     * @var string
     */
    private $Activiteit;

    /**
     * @var bool
     */
    private $MeetelKind;

    /**
     * Constructor
     *
     * @var int $UniekVolgnummer
     * @var string $Voornaam
     * @var string $Achternaam
     * @var \DateTimeInterface $Geboortedatum
     * @var string $Activiteit
     * @var bool $MeetelKind
     */
    public function __construct($UniekVolgnummer, $Voornaam, $Achternaam, $Geboortedatum, $Activiteit, $MeetelKind)
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
    public function getUniekVolgnummer()
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return TKind
     */
    public function withUniekVolgnummer($UniekVolgnummer)
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

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
     * @return TKind
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
    public function getAchternaam()
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return TKind
     */
    public function withAchternaam($Achternaam)
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGeboortedatum()
    {
        return $this->Geboortedatum;
    }

    /**
     * @param \DateTimeInterface $Geboortedatum
     * @return TKind
     */
    public function withGeboortedatum($Geboortedatum)
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getActiviteit()
    {
        return $this->Activiteit;
    }

    /**
     * @param string $Activiteit
     * @return TKind
     */
    public function withActiviteit($Activiteit)
    {
        $new = clone $this;
        $new->Activiteit = $Activiteit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMeetelKind()
    {
        return $this->MeetelKind;
    }

    /**
     * @param bool $MeetelKind
     * @return TKind
     */
    public function withMeetelKind($MeetelKind)
    {
        $new = clone $this;
        $new->MeetelKind = $MeetelKind;

        return $new;
    }
}
