<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanvraag
{

    /**
     * @var TPersoonAanvraag $Aanvrager
     */
    protected $Aanvrager = null;

    /**
     * @var boolean $MetPartner
     */
    protected $MetPartner = null;

    /**
     * @var TPersoonAanvraag $Partner
     */
    protected $Partner = null;

    /**
     * @var TAdres $Bezoekadres
     */
    protected $Bezoekadres = null;

    /**
     * @var TAdres $Postadres
     */
    protected $Postadres = null;

    /**
     * @var TContact $Contact
     */
    protected $Contact = null;

    /**
     * @var boolean $CorrespondentieMail
     */
    protected $CorrespondentieMail = null;

    /**
     * @var TGezinsSituatie $GezinsSituatie
     */
    protected $GezinsSituatie = null;

    /**
     * @var int $AantalKinderen
     */
    protected $AantalKinderen = null;

    /**
     * @var string $ToelichtingKinderen
     */
    protected $ToelichtingKinderen = null;

    /**
     * @var TInkomen $InkomenAanvrager
     */
    protected $InkomenAanvrager = null;

    /**
     * @var TInkomen $InkomenPartner
     */
    protected $InkomenPartner = null;

    /**
     * @var TUitgaven $Uitgaven
     */
    protected $Uitgaven = null;

    /**
     * @var float $Schuldbedrag
     */
    protected $Schuldbedrag = null;

    /**
     * @var int $Schuldeisers
     */
    protected $Schuldeisers = null;

    /**
     * @var string $SoortLening
     */
    protected $SoortLening = null;

    /**
     * @var float $GewenstKrediet
     */
    protected $GewenstKrediet = null;

    /**
     * @var float $GewenstAflossing
     */
    protected $GewenstAflossing = null;

    /**
     * @var string $Bestedingsdoel
     */
    protected $Bestedingsdoel = null;

    /**
     * @var string $Indiener
     */
    protected $Indiener = null;

    /**
     * @var string $HulpverlenerNaam
     */
    protected $HulpverlenerNaam = null;

    /**
     * @var int $OpdrachtgeverCode
     */
    protected $OpdrachtgeverCode = null;

    /**
     * @var string $Contactpersoon
     */
    protected $Contactpersoon = null;

    /**
     * @var string $KredietSoort
     */
    protected $KredietSoort = null;

    /**
     * @var boolean $Borgstelling
     */
    protected $Borgstelling = null;

    /**
     * @var string $Toelichting
     */
    protected $Toelichting = null;

    /**
     * @var boolean $CollectieveBorgstelling
     */
    protected $CollectieveBorgstelling = null;

    /**
     * @param TPersoonAanvraag $Aanvrager
     * @param boolean $MetPartner
     * @param TPersoonAanvraag $Partner
     * @param TAdres $Bezoekadres
     * @param TAdres $Postadres
     * @param TContact $Contact
     * @param boolean $CorrespondentieMail
     * @param TGezinsSituatie $GezinsSituatie
     * @param int $AantalKinderen
     * @param string $ToelichtingKinderen
     * @param TInkomen $InkomenAanvrager
     * @param TInkomen $InkomenPartner
     * @param TUitgaven $Uitgaven
     * @param float $Schuldbedrag
     * @param int $Schuldeisers
     * @param string $SoortLening
     * @param float $GewenstKrediet
     * @param float $GewenstAflossing
     * @param string $Bestedingsdoel
     * @param string $Indiener
     * @param string $HulpverlenerNaam
     * @param int $OpdrachtgeverCode
     * @param string $Contactpersoon
     * @param string $KredietSoort
     * @param boolean $Borgstelling
     * @param string $Toelichting
     * @param boolean $CollectieveBorgstelling
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
     * @return TPersoonAanvraag
     */
    public function getAanvrager()
    {
      return $this->Aanvrager;
    }

    /**
     * @param TPersoonAanvraag $Aanvrager
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setAanvrager($Aanvrager)
    {
      $this->Aanvrager = $Aanvrager;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMetPartner()
    {
      return $this->MetPartner;
    }

    /**
     * @param boolean $MetPartner
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setMetPartner($MetPartner)
    {
      $this->MetPartner = $MetPartner;
      return $this;
    }

    /**
     * @return TPersoonAanvraag
     */
    public function getPartner()
    {
      return $this->Partner;
    }

    /**
     * @param TPersoonAanvraag $Partner
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setPartner($Partner)
    {
      $this->Partner = $Partner;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getBezoekadres()
    {
      return $this->Bezoekadres;
    }

    /**
     * @param TAdres $Bezoekadres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setBezoekadres($Bezoekadres)
    {
      $this->Bezoekadres = $Bezoekadres;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getPostadres()
    {
      return $this->Postadres;
    }

    /**
     * @param TAdres $Postadres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setPostadres($Postadres)
    {
      $this->Postadres = $Postadres;
      return $this;
    }

    /**
     * @return TContact
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param TContact $Contact
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrespondentieMail()
    {
      return $this->CorrespondentieMail;
    }

    /**
     * @param boolean $CorrespondentieMail
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setCorrespondentieMail($CorrespondentieMail)
    {
      $this->CorrespondentieMail = $CorrespondentieMail;
      return $this;
    }

    /**
     * @return TGezinsSituatie
     */
    public function getGezinsSituatie()
    {
      return $this->GezinsSituatie;
    }

    /**
     * @param TGezinsSituatie $GezinsSituatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setGezinsSituatie($GezinsSituatie)
    {
      $this->GezinsSituatie = $GezinsSituatie;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setAantalKinderen($AantalKinderen)
    {
      $this->AantalKinderen = $AantalKinderen;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setToelichtingKinderen($ToelichtingKinderen)
    {
      $this->ToelichtingKinderen = $ToelichtingKinderen;
      return $this;
    }

    /**
     * @return TInkomen
     */
    public function getInkomenAanvrager()
    {
      return $this->InkomenAanvrager;
    }

    /**
     * @param TInkomen $InkomenAanvrager
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setInkomenAanvrager($InkomenAanvrager)
    {
      $this->InkomenAanvrager = $InkomenAanvrager;
      return $this;
    }

    /**
     * @return TInkomen
     */
    public function getInkomenPartner()
    {
      return $this->InkomenPartner;
    }

    /**
     * @param TInkomen $InkomenPartner
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setInkomenPartner($InkomenPartner)
    {
      $this->InkomenPartner = $InkomenPartner;
      return $this;
    }

    /**
     * @return TUitgaven
     */
    public function getUitgaven()
    {
      return $this->Uitgaven;
    }

    /**
     * @param TUitgaven $Uitgaven
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setUitgaven($Uitgaven)
    {
      $this->Uitgaven = $Uitgaven;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setSchuldbedrag($Schuldbedrag)
    {
      $this->Schuldbedrag = $Schuldbedrag;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setSchuldeisers($Schuldeisers)
    {
      $this->Schuldeisers = $Schuldeisers;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setSoortLening($SoortLening)
    {
      $this->SoortLening = $SoortLening;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setGewenstKrediet($GewenstKrediet)
    {
      $this->GewenstKrediet = $GewenstKrediet;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setGewenstAflossing($GewenstAflossing)
    {
      $this->GewenstAflossing = $GewenstAflossing;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setBestedingsdoel($Bestedingsdoel)
    {
      $this->Bestedingsdoel = $Bestedingsdoel;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setIndiener($Indiener)
    {
      $this->Indiener = $Indiener;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setHulpverlenerNaam($HulpverlenerNaam)
    {
      $this->HulpverlenerNaam = $HulpverlenerNaam;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setOpdrachtgeverCode($OpdrachtgeverCode)
    {
      $this->OpdrachtgeverCode = $OpdrachtgeverCode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setContactpersoon($Contactpersoon)
    {
      $this->Contactpersoon = $Contactpersoon;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setKredietSoort($KredietSoort)
    {
      $this->KredietSoort = $KredietSoort;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBorgstelling()
    {
      return $this->Borgstelling;
    }

    /**
     * @param boolean $Borgstelling
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setBorgstelling($Borgstelling)
    {
      $this->Borgstelling = $Borgstelling;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setToelichting($Toelichting)
    {
      $this->Toelichting = $Toelichting;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCollectieveBorgstelling()
    {
      return $this->CollectieveBorgstelling;
    }

    /**
     * @param boolean $CollectieveBorgstelling
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag
     */
    public function setCollectieveBorgstelling($CollectieveBorgstelling)
    {
      $this->CollectieveBorgstelling = $CollectieveBorgstelling;
      return $this;
    }

}
