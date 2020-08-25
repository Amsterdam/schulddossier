<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanvraag2
{

    /**
     * @var int $Bedrijfscode
     */
    protected $Bedrijfscode = null;

    /**
     * @var TAanvraag2Persoon $Aanvrager
     */
    protected $Aanvrager = null;

    /**
     * @var boolean $MetPartner
     */
    protected $MetPartner = null;

    /**
     * @var TAanvraag2Persoon $Partner
     */
    protected $Partner = null;

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
     * @var string $OverigeGegevens
     */
    protected $OverigeGegevens = null;

    /**
     * @param int $Bedrijfscode
     * @param TAanvraag2Persoon $Aanvrager
     * @param boolean $MetPartner
     * @param TGezinsSituatie $GezinsSituatie
     * @param int $AantalKinderen
     * @param float $Schuldbedrag
     * @param int $Schuldeisers
     * @param float $GewenstKrediet
     * @param float $GewenstAflossing
     * @param int $OpdrachtgeverCode
     * @param boolean $Borgstelling
     * @param boolean $CollectieveBorgstelling
     */
    public function __construct($Bedrijfscode, $Aanvrager, $MetPartner, $GezinsSituatie, $AantalKinderen, $Schuldbedrag, $Schuldeisers, $GewenstKrediet, $GewenstAflossing, $OpdrachtgeverCode, $Borgstelling, $CollectieveBorgstelling)
    {
      $this->Bedrijfscode = $Bedrijfscode;
      $this->Aanvrager = $Aanvrager;
      $this->MetPartner = $MetPartner;
      $this->GezinsSituatie = $GezinsSituatie;
      $this->AantalKinderen = $AantalKinderen;
      $this->Schuldbedrag = $Schuldbedrag;
      $this->Schuldeisers = $Schuldeisers;
      $this->GewenstKrediet = $GewenstKrediet;
      $this->GewenstAflossing = $GewenstAflossing;
      $this->OpdrachtgeverCode = $OpdrachtgeverCode;
      $this->Borgstelling = $Borgstelling;
      $this->CollectieveBorgstelling = $CollectieveBorgstelling;
    }

    /**
     * @return int
     */
    public function getBedrijfscode()
    {
      return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
     */
    public function setBedrijfscode($Bedrijfscode)
    {
      $this->Bedrijfscode = $Bedrijfscode;
      return $this;
    }

    /**
     * @return TAanvraag2Persoon
     */
    public function getAanvrager()
    {
      return $this->Aanvrager;
    }

    /**
     * @param TAanvraag2Persoon $Aanvrager
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
     */
    public function setMetPartner($MetPartner)
    {
      $this->MetPartner = $MetPartner;
      return $this;
    }

    /**
     * @return TAanvraag2Persoon
     */
    public function getPartner()
    {
      return $this->Partner;
    }

    /**
     * @param TAanvraag2Persoon $Partner
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
     */
    public function setPartner($Partner)
    {
      $this->Partner = $Partner;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
     */
    public function setToelichtingKinderen($ToelichtingKinderen)
    {
      $this->ToelichtingKinderen = $ToelichtingKinderen;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
     */
    public function setCollectieveBorgstelling($CollectieveBorgstelling)
    {
      $this->CollectieveBorgstelling = $CollectieveBorgstelling;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2
     */
    public function setOverigeGegevens($OverigeGegevens)
    {
      $this->OverigeGegevens = $OverigeGegevens;
      return $this;
    }

}
