<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TPersoonAanvraag implements RequestInterface
{

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var string
     */
    private $Voornamen;

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
    private $Geslacht;

    /**
     * @var int
     */
    private $Geboortedatum;

    /**
     * @var int
     */
    private $BSN;

    /**
     * @var string
     */
    private $Nationaliteit;

    /**
     * @var string
     */
    private $RekeningIBAN;

    /**
     * @var string
     */
    private $RekeningBIC;

    /**
     * @var string
     */
    private $RekeningBank;

    /**
     * @var string
     */
    private $Voorletters;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var string $Voornamen
     * @var string $Achternaam
     * @var string $Voorvoegsels
     * @var string $Geslacht
     * @var int $Geboortedatum
     * @var int $BSN
     * @var string $Nationaliteit
     * @var string $RekeningIBAN
     * @var string $RekeningBIC
     * @var string $RekeningBank
     * @var string $Voorletters
     */
    public function __construct($Relatiecode, $Voornamen, $Achternaam, $Voorvoegsels, $Geslacht, $Geboortedatum, $BSN, $Nationaliteit, $RekeningIBAN, $RekeningBIC, $RekeningBank, $Voorletters)
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
    public function getRelatiecode()
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return TPersoonAanvraag
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornamen()
    {
        return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return TPersoonAanvraag
     */
    public function withVoornamen($Voornamen)
    {
        $new = clone $this;
        $new->Voornamen = $Voornamen;

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
     * @return TPersoonAanvraag
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
     * @return TPersoonAanvraag
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
    public function getGeslacht()
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return TPersoonAanvraag
     */
    public function withGeslacht($Geslacht)
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return int
     */
    public function getGeboortedatum()
    {
        return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return TPersoonAanvraag
     */
    public function withGeboortedatum($Geboortedatum)
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

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
     * @return TPersoonAanvraag
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
    public function getNationaliteit()
    {
        return $this->Nationaliteit;
    }

    /**
     * @param string $Nationaliteit
     * @return TPersoonAanvraag
     */
    public function withNationaliteit($Nationaliteit)
    {
        $new = clone $this;
        $new->Nationaliteit = $Nationaliteit;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningIBAN()
    {
        return $this->RekeningIBAN;
    }

    /**
     * @param string $RekeningIBAN
     * @return TPersoonAanvraag
     */
    public function withRekeningIBAN($RekeningIBAN)
    {
        $new = clone $this;
        $new->RekeningIBAN = $RekeningIBAN;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningBIC()
    {
        return $this->RekeningBIC;
    }

    /**
     * @param string $RekeningBIC
     * @return TPersoonAanvraag
     */
    public function withRekeningBIC($RekeningBIC)
    {
        $new = clone $this;
        $new->RekeningBIC = $RekeningBIC;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningBank()
    {
        return $this->RekeningBank;
    }

    /**
     * @param string $RekeningBank
     * @return TPersoonAanvraag
     */
    public function withRekeningBank($RekeningBank)
    {
        $new = clone $this;
        $new->RekeningBank = $RekeningBank;

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
     * @return TPersoonAanvraag
     */
    public function withVoorletters($Voorletters)
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }


}

