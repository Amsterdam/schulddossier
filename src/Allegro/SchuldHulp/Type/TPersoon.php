<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TPersoon
{
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
     * @var int
     */
    private $BSN;

    /**
     * @var int
     */
    private $Geboortedatum;

    /**
     * @var string
     */
    private $Geslacht;

    /**
     * @var string
     */
    private $Ondernemer;

    /**
     * @var string
     */
    private $SoortOndernemer;

    /**
     * @return string
     */
    public function getVoornamen()
    {
        return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return TPersoon
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
     * @return TPersoon
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
     * @return TPersoon
     */
    public function withVoorvoegsels($Voorvoegsels)
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

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
     * @return TPersoon
     */
    public function withBSN($BSN)
    {
        $new = clone $this;
        $new->BSN = $BSN;

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
     * @return TPersoon
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
    public function getGeslacht()
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return TPersoon
     */
    public function withGeslacht($Geslacht)
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return string
     */
    public function getOndernemer()
    {
        return $this->Ondernemer;
    }

    /**
     * @param string $Ondernemer
     * @return TPersoon
     */
    public function withOndernemer($Ondernemer)
    {
        $new = clone $this;
        $new->Ondernemer = $Ondernemer;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortOndernemer()
    {
        return $this->SoortOndernemer;
    }

    /**
     * @param string $SoortOndernemer
     * @return TPersoon
     */
    public function withSoortOndernemer($SoortOndernemer)
    {
        $new = clone $this;
        $new->SoortOndernemer = $SoortOndernemer;

        return $new;
    }
}

