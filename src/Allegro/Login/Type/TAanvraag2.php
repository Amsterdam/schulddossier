<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TAanvraag2
{
    /**
     * @var int
     */
    private int $Bedrijfscode;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon $Aanvrager;

    /**
     * @var bool
     */
    private bool $MetPartner;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon $Partner = null;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie;

    /**
     * @var int
     */
    private int $AantalKinderen;

    /**
     * @var null | string
     */
    private ?string $ToelichtingKinderen = null;

    /**
     * @var float
     */
    private float $Schuldbedrag;

    /**
     * @var int
     */
    private int $Schuldeisers;

    /**
     * @var null | string
     */
    private ?string $SoortLening = null;

    /**
     * @var float
     */
    private float $GewenstKrediet;

    /**
     * @var float
     */
    private float $GewenstAflossing;

    /**
     * @var null | string
     */
    private ?string $Bestedingsdoel = null;

    /**
     * @var null | string
     */
    private ?string $Indiener = null;

    /**
     * @var null | string
     */
    private ?string $HulpverlenerNaam = null;

    /**
     * @var int
     */
    private int $OpdrachtgeverCode;

    /**
     * @var null | string
     */
    private ?string $Contactpersoon = null;

    /**
     * @var null | string
     */
    private ?string $KredietSoort = null;

    /**
     * @var bool
     */
    private bool $Borgstelling;

    /**
     * @var null | string
     */
    private ?string $Toelichting = null;

    /**
     * @var bool
     */
    private bool $CollectieveBorgstelling;

    /**
     * @var null | string
     */
    private ?string $OverigeGegevens = null;

    /**
     * @return int
     */
    public function getBedrijfscode() : int
    {
        return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return static
     */
    public function withBedrijfscode(int $Bedrijfscode) : static
    {
        $new = clone $this;
        $new->Bedrijfscode = $Bedrijfscode;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon
     */
    public function getAanvrager() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon
    {
        return $this->Aanvrager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon $Aanvrager
     * @return static
     */
    public function withAanvrager(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon $Aanvrager) : static
    {
        $new = clone $this;
        $new->Aanvrager = $Aanvrager;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMetPartner() : bool
    {
        return $this->MetPartner;
    }

    /**
     * @param bool $MetPartner
     * @return static
     */
    public function withMetPartner(bool $MetPartner) : static
    {
        $new = clone $this;
        $new->MetPartner = $MetPartner;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon
     */
    public function getPartner() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon
    {
        return $this->Partner;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon $Partner
     * @return static
     */
    public function withPartner(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2Persoon $Partner) : static
    {
        $new = clone $this;
        $new->Partner = $Partner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
     */
    public function getGezinsSituatie() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
    {
        return $this->GezinsSituatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie
     * @return static
     */
    public function withGezinsSituatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie) : static
    {
        $new = clone $this;
        $new->GezinsSituatie = $GezinsSituatie;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalKinderen() : int
    {
        return $this->AantalKinderen;
    }

    /**
     * @param int $AantalKinderen
     * @return static
     */
    public function withAantalKinderen(int $AantalKinderen) : static
    {
        $new = clone $this;
        $new->AantalKinderen = $AantalKinderen;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getToelichtingKinderen() : ?string
    {
        return $this->ToelichtingKinderen;
    }

    /**
     * @param null | string $ToelichtingKinderen
     * @return static
     */
    public function withToelichtingKinderen(?string $ToelichtingKinderen) : static
    {
        $new = clone $this;
        $new->ToelichtingKinderen = $ToelichtingKinderen;

        return $new;
    }

    /**
     * @return float
     */
    public function getSchuldbedrag() : float
    {
        return $this->Schuldbedrag;
    }

    /**
     * @param float $Schuldbedrag
     * @return static
     */
    public function withSchuldbedrag(float $Schuldbedrag) : static
    {
        $new = clone $this;
        $new->Schuldbedrag = $Schuldbedrag;

        return $new;
    }

    /**
     * @return int
     */
    public function getSchuldeisers() : int
    {
        return $this->Schuldeisers;
    }

    /**
     * @param int $Schuldeisers
     * @return static
     */
    public function withSchuldeisers(int $Schuldeisers) : static
    {
        $new = clone $this;
        $new->Schuldeisers = $Schuldeisers;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSoortLening() : ?string
    {
        return $this->SoortLening;
    }

    /**
     * @param null | string $SoortLening
     * @return static
     */
    public function withSoortLening(?string $SoortLening) : static
    {
        $new = clone $this;
        $new->SoortLening = $SoortLening;

        return $new;
    }

    /**
     * @return float
     */
    public function getGewenstKrediet() : float
    {
        return $this->GewenstKrediet;
    }

    /**
     * @param float $GewenstKrediet
     * @return static
     */
    public function withGewenstKrediet(float $GewenstKrediet) : static
    {
        $new = clone $this;
        $new->GewenstKrediet = $GewenstKrediet;

        return $new;
    }

    /**
     * @return float
     */
    public function getGewenstAflossing() : float
    {
        return $this->GewenstAflossing;
    }

    /**
     * @param float $GewenstAflossing
     * @return static
     */
    public function withGewenstAflossing(float $GewenstAflossing) : static
    {
        $new = clone $this;
        $new->GewenstAflossing = $GewenstAflossing;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBestedingsdoel() : ?string
    {
        return $this->Bestedingsdoel;
    }

    /**
     * @param null | string $Bestedingsdoel
     * @return static
     */
    public function withBestedingsdoel(?string $Bestedingsdoel) : static
    {
        $new = clone $this;
        $new->Bestedingsdoel = $Bestedingsdoel;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIndiener() : ?string
    {
        return $this->Indiener;
    }

    /**
     * @param null | string $Indiener
     * @return static
     */
    public function withIndiener(?string $Indiener) : static
    {
        $new = clone $this;
        $new->Indiener = $Indiener;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHulpverlenerNaam() : ?string
    {
        return $this->HulpverlenerNaam;
    }

    /**
     * @param null | string $HulpverlenerNaam
     * @return static
     */
    public function withHulpverlenerNaam(?string $HulpverlenerNaam) : static
    {
        $new = clone $this;
        $new->HulpverlenerNaam = $HulpverlenerNaam;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverCode() : int
    {
        return $this->OpdrachtgeverCode;
    }

    /**
     * @param int $OpdrachtgeverCode
     * @return static
     */
    public function withOpdrachtgeverCode(int $OpdrachtgeverCode) : static
    {
        $new = clone $this;
        $new->OpdrachtgeverCode = $OpdrachtgeverCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContactpersoon() : ?string
    {
        return $this->Contactpersoon;
    }

    /**
     * @param null | string $Contactpersoon
     * @return static
     */
    public function withContactpersoon(?string $Contactpersoon) : static
    {
        $new = clone $this;
        $new->Contactpersoon = $Contactpersoon;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKredietSoort() : ?string
    {
        return $this->KredietSoort;
    }

    /**
     * @param null | string $KredietSoort
     * @return static
     */
    public function withKredietSoort(?string $KredietSoort) : static
    {
        $new = clone $this;
        $new->KredietSoort = $KredietSoort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBorgstelling() : bool
    {
        return $this->Borgstelling;
    }

    /**
     * @param bool $Borgstelling
     * @return static
     */
    public function withBorgstelling(bool $Borgstelling) : static
    {
        $new = clone $this;
        $new->Borgstelling = $Borgstelling;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getToelichting() : ?string
    {
        return $this->Toelichting;
    }

    /**
     * @param null | string $Toelichting
     * @return static
     */
    public function withToelichting(?string $Toelichting) : static
    {
        $new = clone $this;
        $new->Toelichting = $Toelichting;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCollectieveBorgstelling() : bool
    {
        return $this->CollectieveBorgstelling;
    }

    /**
     * @param bool $CollectieveBorgstelling
     * @return static
     */
    public function withCollectieveBorgstelling(bool $CollectieveBorgstelling) : static
    {
        $new = clone $this;
        $new->CollectieveBorgstelling = $CollectieveBorgstelling;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOverigeGegevens() : ?string
    {
        return $this->OverigeGegevens;
    }

    /**
     * @param null | string $OverigeGegevens
     * @return static
     */
    public function withOverigeGegevens(?string $OverigeGegevens) : static
    {
        $new = clone $this;
        $new->OverigeGegevens = $OverigeGegevens;

        return $new;
    }
}

