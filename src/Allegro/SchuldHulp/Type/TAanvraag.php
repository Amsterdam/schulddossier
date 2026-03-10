<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAanvraag implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag
     */
    private $Aanvrager;

    /**
     * @var bool
     */
    private $MetPartner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag
     */
    private $Partner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $Bezoekadres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $Postadres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact
     */
    private $Contact;

    /**
     * @var bool
     */
    private $CorrespondentieMail;

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
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen
     */
    private $InkomenAanvrager;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen
     */
    private $InkomenPartner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TUitgaven
     */
    private $Uitgaven;

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
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag $Aanvrager
     * @var bool $MetPartner
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag $Partner
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact
     * @var bool $CorrespondentieMail
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGezinsSituatie $GezinsSituatie
     * @var int $AantalKinderen
     * @var string $ToelichtingKinderen
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen $InkomenAanvrager
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen $InkomenPartner
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TUitgaven $Uitgaven
     * @var float $Schuldbedrag
     * @var int $Schuldeisers
     * @var string $SoortLening
     * @var float $GewenstKrediet
     * @var float $GewenstAflossing
     * @var string $Bestedingsdoel
     * @var string $Indiener
     * @var string $HulpverlenerNaam
     * @var int $OpdrachtgeverCode
     * @var string $Contactpersoon
     * @var string $KredietSoort
     * @var bool $Borgstelling
     * @var string $Toelichting
     * @var bool $CollectieveBorgstelling
     */
    public function __construct($Aanvrager, $MetPartner, $Partner, $Bezoekadres, $Postadres, $Contact, $CorrespondentieMail, $GezinsSituatie, $AantalKinderen, $ToelichtingKinderen, $InkomenAanvrager, $InkomenPartner, $Uitgaven, $Schuldbedrag, $Schuldeisers, $SoortLening, $GewenstKrediet, $GewenstAflossing, $Bestedingsdoel, $Indiener, $HulpverlenerNaam, $OpdrachtgeverCode, $Contactpersoon, $KredietSoort, $Borgstelling, $Toelichting, $CollectieveBorgstelling)
    {
        $this->Aanvrager = $Aanvrager;
        $this->MetPartner = $MetPartner;
        $this->Partner = $Partner;
        $this->Bezoekadres = $Bezoekadres;
        $this->Postadres = $Postadres;
        $this->Contact = $Contact;
        $this->CorrespondentieMail = $CorrespondentieMail;
        $this->GezinsSituatie = $GezinsSituatie;
        $this->AantalKinderen = $AantalKinderen;
        $this->ToelichtingKinderen = $ToelichtingKinderen;
        $this->InkomenAanvrager = $InkomenAanvrager;
        $this->InkomenPartner = $InkomenPartner;
        $this->Uitgaven = $Uitgaven;
        $this->Schuldbedrag = $Schuldbedrag;
        $this->Schuldeisers = $Schuldeisers;
        $this->SoortLening = $SoortLening;
        $this->GewenstKrediet = $GewenstKrediet;
        $this->GewenstAflossing = $GewenstAflossing;
        $this->Bestedingsdoel = $Bestedingsdoel;
        $this->Indiener = $Indiener;
        $this->HulpverlenerNaam = $HulpverlenerNaam;
        $this->OpdrachtgeverCode = $OpdrachtgeverCode;
        $this->Contactpersoon = $Contactpersoon;
        $this->KredietSoort = $KredietSoort;
        $this->Borgstelling = $Borgstelling;
        $this->Toelichting = $Toelichting;
        $this->CollectieveBorgstelling = $CollectieveBorgstelling;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag
     */
    public function getAanvrager()
    {
        return $this->Aanvrager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag $Aanvrager
     * @return TAanvraag
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
     * @return TAanvraag
     */
    public function withMetPartner($MetPartner)
    {
        $new = clone $this;
        $new->MetPartner = $MetPartner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag
     */
    public function getPartner()
    {
        return $this->Partner;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag $Partner
     * @return TAanvraag
     */
    public function withPartner($Partner)
    {
        $new = clone $this;
        $new->Partner = $Partner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getBezoekadres()
    {
        return $this->Bezoekadres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres
     * @return TAanvraag
     */
    public function withBezoekadres($Bezoekadres)
    {
        $new = clone $this;
        $new->Bezoekadres = $Bezoekadres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getPostadres()
    {
        return $this->Postadres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres
     * @return TAanvraag
     */
    public function withPostadres($Postadres)
    {
        $new = clone $this;
        $new->Postadres = $Postadres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact
     * @return TAanvraag
     */
    public function withContact($Contact)
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieMail()
    {
        return $this->CorrespondentieMail;
    }

    /**
     * @param bool $CorrespondentieMail
     * @return TAanvraag
     */
    public function withCorrespondentieMail($CorrespondentieMail)
    {
        $new = clone $this;
        $new->CorrespondentieMail = $CorrespondentieMail;

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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
     */
    public function withToelichtingKinderen($ToelichtingKinderen)
    {
        $new = clone $this;
        $new->ToelichtingKinderen = $ToelichtingKinderen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen
     */
    public function getInkomenAanvrager()
    {
        return $this->InkomenAanvrager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen $InkomenAanvrager
     * @return TAanvraag
     */
    public function withInkomenAanvrager($InkomenAanvrager)
    {
        $new = clone $this;
        $new->InkomenAanvrager = $InkomenAanvrager;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen
     */
    public function getInkomenPartner()
    {
        return $this->InkomenPartner;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen $InkomenPartner
     * @return TAanvraag
     */
    public function withInkomenPartner($InkomenPartner)
    {
        $new = clone $this;
        $new->InkomenPartner = $InkomenPartner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TUitgaven
     */
    public function getUitgaven()
    {
        return $this->Uitgaven;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TUitgaven $Uitgaven
     * @return TAanvraag
     */
    public function withUitgaven($Uitgaven)
    {
        $new = clone $this;
        $new->Uitgaven = $Uitgaven;

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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
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
     * @return TAanvraag
     */
    public function withCollectieveBorgstelling($CollectieveBorgstelling)
    {
        $new = clone $this;
        $new->CollectieveBorgstelling = $CollectieveBorgstelling;

        return $new;
    }
}
