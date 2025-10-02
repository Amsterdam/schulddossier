<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TAanvraag
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag $Aanvrager;

    /**
     * @var bool
     */
    private bool $MetPartner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag $Partner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Bezoekadres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Postadres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact $Contact;

    /**
     * @var bool
     */
    private bool $CorrespondentieMail;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie;

    /**
     * @var int
     */
    private int $AantalKinderen;

    /**
     * @var string
     */
    private string $ToelichtingKinderen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen $InkomenAanvrager;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen $InkomenPartner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven $Uitgaven;

    /**
     * @var float
     */
    private float $Schuldbedrag;

    /**
     * @var int
     */
    private int $Schuldeisers;

    /**
     * @var string
     */
    private string $SoortLening;

    /**
     * @var float
     */
    private float $GewenstKrediet;

    /**
     * @var float
     */
    private float $GewenstAflossing;

    /**
     * @var string
     */
    private string $Bestedingsdoel;

    /**
     * @var string
     */
    private string $Indiener;

    /**
     * @var string
     */
    private string $HulpverlenerNaam;

    /**
     * @var int
     */
    private int $OpdrachtgeverCode;

    /**
     * @var string
     */
    private string $Contactpersoon;

    /**
     * @var string
     */
    private string $KredietSoort;

    /**
     * @var bool
     */
    private bool $Borgstelling;

    /**
     * @var string
     */
    private string $Toelichting;

    /**
     * @var bool
     */
    private bool $CollectieveBorgstelling;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag
     */
    public function getAanvrager() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag
    {
        return $this->Aanvrager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag $Aanvrager
     * @return static
     */
    public function withAanvrager(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag $Aanvrager) : static
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag
     */
    public function getPartner() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag
    {
        return $this->Partner;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag $Partner
     * @return static
     */
    public function withPartner(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag $Partner) : static
    {
        $new = clone $this;
        $new->Partner = $Partner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getBezoekadres() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->Bezoekadres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Bezoekadres
     * @return static
     */
    public function withBezoekadres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Bezoekadres) : static
    {
        $new = clone $this;
        $new->Bezoekadres = $Bezoekadres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getPostadres() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->Postadres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Postadres
     * @return static
     */
    public function withPostadres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Postadres) : static
    {
        $new = clone $this;
        $new->Postadres = $Postadres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact
     */
    public function getContact() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact
    {
        return $this->Contact;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact $Contact
     * @return static
     */
    public function withContact(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact $Contact) : static
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieMail() : bool
    {
        return $this->CorrespondentieMail;
    }

    /**
     * @param bool $CorrespondentieMail
     * @return static
     */
    public function withCorrespondentieMail(bool $CorrespondentieMail) : static
    {
        $new = clone $this;
        $new->CorrespondentieMail = $CorrespondentieMail;

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
     * @return string
     */
    public function getToelichtingKinderen() : string
    {
        return $this->ToelichtingKinderen;
    }

    /**
     * @param string $ToelichtingKinderen
     * @return static
     */
    public function withToelichtingKinderen(string $ToelichtingKinderen) : static
    {
        $new = clone $this;
        $new->ToelichtingKinderen = $ToelichtingKinderen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen
     */
    public function getInkomenAanvrager() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen
    {
        return $this->InkomenAanvrager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen $InkomenAanvrager
     * @return static
     */
    public function withInkomenAanvrager(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen $InkomenAanvrager) : static
    {
        $new = clone $this;
        $new->InkomenAanvrager = $InkomenAanvrager;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen
     */
    public function getInkomenPartner() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen
    {
        return $this->InkomenPartner;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen $InkomenPartner
     * @return static
     */
    public function withInkomenPartner(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen $InkomenPartner) : static
    {
        $new = clone $this;
        $new->InkomenPartner = $InkomenPartner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven
     */
    public function getUitgaven() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven
    {
        return $this->Uitgaven;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven $Uitgaven
     * @return static
     */
    public function withUitgaven(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven $Uitgaven) : static
    {
        $new = clone $this;
        $new->Uitgaven = $Uitgaven;

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
     * @return string
     */
    public function getSoortLening() : string
    {
        return $this->SoortLening;
    }

    /**
     * @param string $SoortLening
     * @return static
     */
    public function withSoortLening(string $SoortLening) : static
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
     * @return string
     */
    public function getBestedingsdoel() : string
    {
        return $this->Bestedingsdoel;
    }

    /**
     * @param string $Bestedingsdoel
     * @return static
     */
    public function withBestedingsdoel(string $Bestedingsdoel) : static
    {
        $new = clone $this;
        $new->Bestedingsdoel = $Bestedingsdoel;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndiener() : string
    {
        return $this->Indiener;
    }

    /**
     * @param string $Indiener
     * @return static
     */
    public function withIndiener(string $Indiener) : static
    {
        $new = clone $this;
        $new->Indiener = $Indiener;

        return $new;
    }

    /**
     * @return string
     */
    public function getHulpverlenerNaam() : string
    {
        return $this->HulpverlenerNaam;
    }

    /**
     * @param string $HulpverlenerNaam
     * @return static
     */
    public function withHulpverlenerNaam(string $HulpverlenerNaam) : static
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
     * @return string
     */
    public function getContactpersoon() : string
    {
        return $this->Contactpersoon;
    }

    /**
     * @param string $Contactpersoon
     * @return static
     */
    public function withContactpersoon(string $Contactpersoon) : static
    {
        $new = clone $this;
        $new->Contactpersoon = $Contactpersoon;

        return $new;
    }

    /**
     * @return string
     */
    public function getKredietSoort() : string
    {
        return $this->KredietSoort;
    }

    /**
     * @param string $KredietSoort
     * @return static
     */
    public function withKredietSoort(string $KredietSoort) : static
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
     * @return string
     */
    public function getToelichting() : string
    {
        return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return static
     */
    public function withToelichting(string $Toelichting) : static
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
}

