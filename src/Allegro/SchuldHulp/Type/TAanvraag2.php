<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TAanvraag2
{
    /**
     * @var int
     */
    private $Bedrijfscode;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Persoon
     */
    private $Aanvrager;

    /**
     * @var bool
     */
    private $MetPartner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Persoon
     */
    private $Partner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGezinsSituatie
     */
    private $GezinsSituatie;

    /**
     * @var int
     */
    private $AantalKinderen;

    /**
     * @var string
     */
    private $ToelichtingKinderen;

    /**
     * @var float
     */
    private $Schuldbedrag;

    /**
     * @var int
     */
    private $Schuldeisers;

    /**
     * @var string
     */
    private $SoortLening;

    /**
     * @var float
     */
    private $GewenstKrediet;

    /**
     * @var float
     */
    private $GewenstAflossing;

    /**
     * @var string
     */
    private $Bestedingsdoel;

    /**
     * @var string
     */
    private $Indiener;

    /**
     * @var string
     */
    private $HulpverlenerNaam;

    /**
     * @var int
     */
    private $OpdrachtgeverCode;

    /**
     * @var string
     */
    private $Contactpersoon;

    /**
     * @var string
     */
    private $KredietSoort;

    /**
     * @var bool
     */
    private $Borgstelling;

    /**
     * @var string
     */
    private $Toelichting;

    /**
     * @var bool
     */
    private $CollectieveBorgstelling;

    /**
     * @var string
     */
    private $OverigeGegevens;

    /**
     * @return int
     */
    public function getBedrijfscode()
    {
        return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return TAanvraag2
     */
    public function withBedrijfscode($Bedrijfscode)
    {
        $new = clone $this;
        $new->Bedrijfscode = $Bedrijfscode;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Persoon
     */
    public function getAanvrager()
    {
        return $this->Aanvrager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Persoon $Aanvrager
     * @return TAanvraag2
     */
    public function withAanvrager($Aanvrager)
    {
        $new = clone $this;
        $new->Aanvrager = $Aanvrager;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMetPartner()
    {
        return $this->MetPartner;
    }

    /**
     * @param bool $MetPartner
     * @return TAanvraag2
     */
    public function withMetPartner($MetPartner)
    {
        $new = clone $this;
        $new->MetPartner = $MetPartner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Persoon
     */
    public function getPartner()
    {
        return $this->Partner;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Persoon $Partner
     * @return TAanvraag2
     */
    public function withPartner($Partner)
    {
        $new = clone $this;
        $new->Partner = $Partner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGezinsSituatie
     */
    public function getGezinsSituatie()
    {
        return $this->GezinsSituatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGezinsSituatie $GezinsSituatie
     * @return TAanvraag2
     */
    public function withGezinsSituatie($GezinsSituatie)
    {
        $new = clone $this;
        $new->GezinsSituatie = $GezinsSituatie;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalKinderen()
    {
        return $this->AantalKinderen;
    }

    /**
     * @param int $AantalKinderen
     * @return TAanvraag2
     */
    public function withAantalKinderen($AantalKinderen)
    {
        $new = clone $this;
        $new->AantalKinderen = $AantalKinderen;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingKinderen()
    {
        return $this->ToelichtingKinderen;
    }

    /**
     * @param string $ToelichtingKinderen
     * @return TAanvraag2
     */
    public function withToelichtingKinderen($ToelichtingKinderen)
    {
        $new = clone $this;
        $new->ToelichtingKinderen = $ToelichtingKinderen;

        return $new;
    }

    /**
     * @return float
     */
    public function getSchuldbedrag()
    {
        return $this->Schuldbedrag;
    }

    /**
     * @param float $Schuldbedrag
     * @return TAanvraag2
     */
    public function withSchuldbedrag($Schuldbedrag)
    {
        $new = clone $this;
        $new->Schuldbedrag = $Schuldbedrag;

        return $new;
    }

    /**
     * @return int
     */
    public function getSchuldeisers()
    {
        return $this->Schuldeisers;
    }

    /**
     * @param int $Schuldeisers
     * @return TAanvraag2
     */
    public function withSchuldeisers($Schuldeisers)
    {
        $new = clone $this;
        $new->Schuldeisers = $Schuldeisers;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortLening()
    {
        return $this->SoortLening;
    }

    /**
     * @param string $SoortLening
     * @return TAanvraag2
     */
    public function withSoortLening($SoortLening)
    {
        $new = clone $this;
        $new->SoortLening = $SoortLening;

        return $new;
    }

    /**
     * @return float
     */
    public function getGewenstKrediet()
    {
        return $this->GewenstKrediet;
    }

    /**
     * @param float $GewenstKrediet
     * @return TAanvraag2
     */
    public function withGewenstKrediet($GewenstKrediet)
    {
        $new = clone $this;
        $new->GewenstKrediet = $GewenstKrediet;

        return $new;
    }

    /**
     * @return float
     */
    public function getGewenstAflossing()
    {
        return $this->GewenstAflossing;
    }

    /**
     * @param float $GewenstAflossing
     * @return TAanvraag2
     */
    public function withGewenstAflossing($GewenstAflossing)
    {
        $new = clone $this;
        $new->GewenstAflossing = $GewenstAflossing;

        return $new;
    }

    /**
     * @return string
     */
    public function getBestedingsdoel()
    {
        return $this->Bestedingsdoel;
    }

    /**
     * @param string $Bestedingsdoel
     * @return TAanvraag2
     */
    public function withBestedingsdoel($Bestedingsdoel)
    {
        $new = clone $this;
        $new->Bestedingsdoel = $Bestedingsdoel;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndiener()
    {
        return $this->Indiener;
    }

    /**
     * @param string $Indiener
     * @return TAanvraag2
     */
    public function withIndiener($Indiener)
    {
        $new = clone $this;
        $new->Indiener = $Indiener;

        return $new;
    }

    /**
     * @return string
     */
    public function getHulpverlenerNaam()
    {
        return $this->HulpverlenerNaam;
    }

    /**
     * @param string $HulpverlenerNaam
     * @return TAanvraag2
     */
    public function withHulpverlenerNaam($HulpverlenerNaam)
    {
        $new = clone $this;
        $new->HulpverlenerNaam = $HulpverlenerNaam;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverCode()
    {
        return $this->OpdrachtgeverCode;
    }

    /**
     * @param int $OpdrachtgeverCode
     * @return TAanvraag2
     */
    public function withOpdrachtgeverCode($OpdrachtgeverCode)
    {
        $new = clone $this;
        $new->OpdrachtgeverCode = $OpdrachtgeverCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getContactpersoon()
    {
        return $this->Contactpersoon;
    }

    /**
     * @param string $Contactpersoon
     * @return TAanvraag2
     */
    public function withContactpersoon($Contactpersoon)
    {
        $new = clone $this;
        $new->Contactpersoon = $Contactpersoon;

        return $new;
    }

    /**
     * @return string
     */
    public function getKredietSoort()
    {
        return $this->KredietSoort;
    }

    /**
     * @param string $KredietSoort
     * @return TAanvraag2
     */
    public function withKredietSoort($KredietSoort)
    {
        $new = clone $this;
        $new->KredietSoort = $KredietSoort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBorgstelling()
    {
        return $this->Borgstelling;
    }

    /**
     * @param bool $Borgstelling
     * @return TAanvraag2
     */
    public function withBorgstelling($Borgstelling)
    {
        $new = clone $this;
        $new->Borgstelling = $Borgstelling;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichting()
    {
        return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return TAanvraag2
     */
    public function withToelichting($Toelichting)
    {
        $new = clone $this;
        $new->Toelichting = $Toelichting;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCollectieveBorgstelling()
    {
        return $this->CollectieveBorgstelling;
    }

    /**
     * @param bool $CollectieveBorgstelling
     * @return TAanvraag2
     */
    public function withCollectieveBorgstelling($CollectieveBorgstelling)
    {
        $new = clone $this;
        $new->CollectieveBorgstelling = $CollectieveBorgstelling;

        return $new;
    }

    /**
     * @return string
     */
    public function getOverigeGegevens()
    {
        return $this->OverigeGegevens;
    }

    /**
     * @param string $OverigeGegevens
     * @return TAanvraag2
     */
    public function withOverigeGegevens($OverigeGegevens)
    {
        $new = clone $this;
        $new->OverigeGegevens = $OverigeGegevens;

        return $new;
    }
}

