<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPersoon implements RequestInterface
{
    /**
     * @var string
     */
    private string $Voornamen;

    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var string
     */
    private string $Voorvoegsels;

    /**
     * @var int
     */
    private int $BSN;

    /**
     * @var int
     */
    private int $Geboortedatum;

    /**
     * @var string
     */
    private string $Geslacht;

    /**
     * @var string
     */
    private string $Ondernemer;

    /**
     * @var string
     */
    private string $SoortOndernemer;

    /**
     * Constructor
     *
     * @param string $Voornamen
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param int $BSN
     * @param int $Geboortedatum
     * @param string $Geslacht
     * @param string $Ondernemer
     * @param string $SoortOndernemer
     */
    public function __construct(string $Voornamen, string $Achternaam, string $Voorvoegsels, int $BSN, int $Geboortedatum, string $Geslacht, string $Ondernemer, string $SoortOndernemer)
    {
        $this->Voornamen = $Voornamen;
        $this->Achternaam = $Achternaam;
        $this->Voorvoegsels = $Voorvoegsels;
        $this->BSN = $BSN;
        $this->Geboortedatum = $Geboortedatum;
        $this->Geslacht = $Geslacht;
        $this->Ondernemer = $Ondernemer;
        $this->SoortOndernemer = $SoortOndernemer;
    }

    /**
     * @return string
     */
    public function getVoornamen() : string
    {
        return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return static
     */
    public function withVoornamen(string $Voornamen) : static
    {
        $new = clone $this;
        $new->Voornamen = $Voornamen;

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
     * @return string
     */
    public function getVoorvoegsels() : string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(string $Voorvoegsels) : static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return int
     */
    public function getBSN() : int
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return static
     */
    public function withBSN(int $BSN) : static
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }

    /**
     * @return int
     */
    public function getGeboortedatum() : int
    {
        return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return static
     */
    public function withGeboortedatum(int $Geboortedatum) : static
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeslacht() : string
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return static
     */
    public function withGeslacht(string $Geslacht) : static
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return string
     */
    public function getOndernemer() : string
    {
        return $this->Ondernemer;
    }

    /**
     * @param string $Ondernemer
     * @return static
     */
    public function withOndernemer(string $Ondernemer) : static
    {
        $new = clone $this;
        $new->Ondernemer = $Ondernemer;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortOndernemer() : string
    {
        return $this->SoortOndernemer;
    }

    /**
     * @param string $SoortOndernemer
     * @return static
     */
    public function withSoortOndernemer(string $SoortOndernemer) : static
    {
        $new = clone $this;
        $new->SoortOndernemer = $SoortOndernemer;

        return $new;
    }
}

