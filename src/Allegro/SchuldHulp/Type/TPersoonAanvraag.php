<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPersoonAanvraag implements RequestInterface
{
    /**
     * @var int
     */
    private int $Relatiecode;

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
     * @var string
     */
    private string $Geslacht;

    /**
     * @var int
     */
    private int $Geboortedatum;

    /**
     * @var int
     */
    private int $BSN;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit;

    /**
     * @var string
     */
    private string $RekeningIBAN;

    /**
     * @var string
     */
    private string $RekeningBIC;

    /**
     * @var string
     */
    private string $RekeningBank;

    /**
     * @var string
     */
    private string $Voorletters;

    /**
     * Constructor
     *
     * @param int $Relatiecode
     * @param string $Voornamen
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Geslacht
     * @param int $Geboortedatum
     * @param int $BSN
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit
     * @param string $RekeningIBAN
     * @param string $RekeningBIC
     * @param string $RekeningBank
     * @param string $Voorletters
     */
    public function __construct(int $Relatiecode, string $Voornamen, string $Achternaam, string $Voorvoegsels, string $Geslacht, int $Geboortedatum, int $BSN, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit, string $RekeningIBAN, string $RekeningBIC, string $RekeningBank, string $Voorletters)
    {
        $this->Relatiecode = $Relatiecode;
        $this->Voornamen = $Voornamen;
        $this->Achternaam = $Achternaam;
        $this->Voorvoegsels = $Voorvoegsels;
        $this->Geslacht = $Geslacht;
        $this->Geboortedatum = $Geboortedatum;
        $this->BSN = $BSN;
        $this->Nationaliteit = $Nationaliteit;
        $this->RekeningIBAN = $RekeningIBAN;
        $this->RekeningBIC = $RekeningBIC;
        $this->RekeningBank = $RekeningBank;
        $this->Voorletters = $Voorletters;
    }

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit
     */
    public function getNationaliteit() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit
    {
        return $this->Nationaliteit;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit
     * @return static
     */
    public function withNationaliteit(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit) : static
    {
        $new = clone $this;
        $new->Nationaliteit = $Nationaliteit;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningIBAN() : string
    {
        return $this->RekeningIBAN;
    }

    /**
     * @param string $RekeningIBAN
     * @return static
     */
    public function withRekeningIBAN(string $RekeningIBAN) : static
    {
        $new = clone $this;
        $new->RekeningIBAN = $RekeningIBAN;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningBIC() : string
    {
        return $this->RekeningBIC;
    }

    /**
     * @param string $RekeningBIC
     * @return static
     */
    public function withRekeningBIC(string $RekeningBIC) : static
    {
        $new = clone $this;
        $new->RekeningBIC = $RekeningBIC;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningBank() : string
    {
        return $this->RekeningBank;
    }

    /**
     * @param string $RekeningBank
     * @return static
     */
    public function withRekeningBank(string $RekeningBank) : static
    {
        $new = clone $this;
        $new->RekeningBank = $RekeningBank;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters() : string
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return static
     */
    public function withVoorletters(string $Voorletters) : static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }
}

