<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanvraagSR extends TAanvraag
{

    /**
     * @var int $Bedrijfscode
     */
    protected $Bedrijfscode = null;

    /**
     * @var boolean $CorrespondentieWeb
     */
    protected $CorrespondentieWeb = null;

    /**
     * @var boolean $NPS
     */
    protected $NPS = null;

    /**
     * @var string $OorzaakSchulden
     */
    protected $OorzaakSchulden = null;

    /**
     * @var TOrganisatie $Bewindvoerder
     */
    protected $Bewindvoerder = null;

    /**
     * @var string $ToelichtingAlgemeen
     */
    protected $ToelichtingAlgemeen = null;

    /**
     * @var string $ToelichtingSO
     */
    protected $ToelichtingSO = null;

    /**
     * @var string $ToelichtingAanmelding
     */
    protected $ToelichtingAanmelding = null;

    /**
     * @var string $ToelichtingVoorstel
     */
    protected $ToelichtingVoorstel = null;

    /**
     * @var boolean $TotaalschuldVullen
     */
    protected $TotaalschuldVullen = null;

    /**
     * @var boolean $OpdrachtgeverOvernemen
     */
    protected $OpdrachtgeverOvernemen = null;

    /**
     * @var boolean $HulpverlenerOvernemen
     */
    protected $HulpverlenerOvernemen = null;

    /**
     * @var OpenVraagArray $OpenVragen
     */
    protected $OpenVragen = null;

    /**
     * @var GeslotenVraagArray $GeslotenVragen
     */
    protected $GeslotenVragen = null;

    /**
     * @var SchuldArray $Schulden
     */
    protected $Schulden = null;

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
     * @param int $Bedrijfscode
     * @param boolean $CorrespondentieWeb
     * @param boolean $NPS
     * @param string $OorzaakSchulden
     * @param TOrganisatie $Bewindvoerder
     * @param string $ToelichtingAlgemeen
     * @param string $ToelichtingSO
     * @param string $ToelichtingAanmelding
     * @param string $ToelichtingVoorstel
     * @param boolean $TotaalschuldVullen
     * @param boolean $OpdrachtgeverOvernemen
     * @param boolean $HulpverlenerOvernemen
     * @param OpenVraagArray $OpenVragen
     * @param GeslotenVraagArray $GeslotenVragen
     * @param SchuldArray $Schulden
     */
    public function __construct($Aanvrager, $MetPartner, $Partner, $Bezoekadres, $Postadres, $Contact, $CorrespondentieMail, $GezinsSituatie, $AantalKinderen, $ToelichtingKinderen, $InkomenAanvrager, $InkomenPartner, $Uitgaven, $Schuldbedrag, $Schuldeisers, $SoortLening, $GewenstKrediet, $GewenstAflossing, $Bestedingsdoel, $Indiener, $HulpverlenerNaam, $OpdrachtgeverCode, $Contactpersoon, $KredietSoort, $Borgstelling, $Toelichting, $CollectieveBorgstelling, $Bedrijfscode, $CorrespondentieWeb, $NPS, $OorzaakSchulden, $Bewindvoerder, $ToelichtingAlgemeen, $ToelichtingSO, $ToelichtingAanmelding, $ToelichtingVoorstel, $TotaalschuldVullen, $OpdrachtgeverOvernemen, $HulpverlenerOvernemen, $OpenVragen, $GeslotenVragen, $Schulden)
    {
      parent::__construct($Aanvrager, $MetPartner, $Partner, $Bezoekadres, $Postadres, $Contact, $CorrespondentieMail, $GezinsSituatie, $AantalKinderen, $ToelichtingKinderen, $InkomenAanvrager, $InkomenPartner, $Uitgaven, $Schuldbedrag, $Schuldeisers, $SoortLening, $GewenstKrediet, $GewenstAflossing, $Bestedingsdoel, $Indiener, $HulpverlenerNaam, $OpdrachtgeverCode, $Contactpersoon, $KredietSoort, $Borgstelling, $Toelichting, $CollectieveBorgstelling);
      $this->Bedrijfscode = $Bedrijfscode;
      $this->CorrespondentieWeb = $CorrespondentieWeb;
      $this->NPS = $NPS;
      $this->OorzaakSchulden = $OorzaakSchulden;
      $this->Bewindvoerder = $Bewindvoerder;
      $this->ToelichtingAlgemeen = $ToelichtingAlgemeen;
      $this->ToelichtingSO = $ToelichtingSO;
      $this->ToelichtingAanmelding = $ToelichtingAanmelding;
      $this->ToelichtingVoorstel = $ToelichtingVoorstel;
      $this->TotaalschuldVullen = $TotaalschuldVullen;
      $this->OpdrachtgeverOvernemen = $OpdrachtgeverOvernemen;
      $this->HulpverlenerOvernemen = $HulpverlenerOvernemen;
      $this->OpenVragen = $OpenVragen;
      $this->GeslotenVragen = $GeslotenVragen;
      $this->Schulden = $Schulden;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setBedrijfscode($Bedrijfscode)
    {
      $this->Bedrijfscode = $Bedrijfscode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrespondentieWeb()
    {
      return $this->CorrespondentieWeb;
    }

    /**
     * @param boolean $CorrespondentieWeb
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setCorrespondentieWeb($CorrespondentieWeb)
    {
      $this->CorrespondentieWeb = $CorrespondentieWeb;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNPS()
    {
      return $this->NPS;
    }

    /**
     * @param boolean $NPS
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setNPS($NPS)
    {
      $this->NPS = $NPS;
      return $this;
    }

    /**
     * @return string
     */
    public function getOorzaakSchulden()
    {
      return $this->OorzaakSchulden;
    }

    /**
     * @param string $OorzaakSchulden
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setOorzaakSchulden($OorzaakSchulden)
    {
      $this->OorzaakSchulden = $OorzaakSchulden;
      return $this;
    }

    /**
     * @return TOrganisatie
     */
    public function getBewindvoerder()
    {
      return $this->Bewindvoerder;
    }

    /**
     * @param TOrganisatie $Bewindvoerder
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setBewindvoerder($Bewindvoerder)
    {
      $this->Bewindvoerder = $Bewindvoerder;
      return $this;
    }

    /**
     * @return string
     */
    public function getToelichtingAlgemeen()
    {
      return $this->ToelichtingAlgemeen;
    }

    /**
     * @param string $ToelichtingAlgemeen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setToelichtingAlgemeen($ToelichtingAlgemeen)
    {
      $this->ToelichtingAlgemeen = $ToelichtingAlgemeen;
      return $this;
    }

    /**
     * @return string
     */
    public function getToelichtingSO()
    {
      return $this->ToelichtingSO;
    }

    /**
     * @param string $ToelichtingSO
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setToelichtingSO($ToelichtingSO)
    {
      $this->ToelichtingSO = $ToelichtingSO;
      return $this;
    }

    /**
     * @return string
     */
    public function getToelichtingAanmelding()
    {
      return $this->ToelichtingAanmelding;
    }

    /**
     * @param string $ToelichtingAanmelding
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setToelichtingAanmelding($ToelichtingAanmelding)
    {
      $this->ToelichtingAanmelding = $ToelichtingAanmelding;
      return $this;
    }

    /**
     * @return string
     */
    public function getToelichtingVoorstel()
    {
      return $this->ToelichtingVoorstel;
    }

    /**
     * @param string $ToelichtingVoorstel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setToelichtingVoorstel($ToelichtingVoorstel)
    {
      $this->ToelichtingVoorstel = $ToelichtingVoorstel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTotaalschuldVullen()
    {
      return $this->TotaalschuldVullen;
    }

    /**
     * @param boolean $TotaalschuldVullen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setTotaalschuldVullen($TotaalschuldVullen)
    {
      $this->TotaalschuldVullen = $TotaalschuldVullen;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpdrachtgeverOvernemen()
    {
      return $this->OpdrachtgeverOvernemen;
    }

    /**
     * @param boolean $OpdrachtgeverOvernemen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setOpdrachtgeverOvernemen($OpdrachtgeverOvernemen)
    {
      $this->OpdrachtgeverOvernemen = $OpdrachtgeverOvernemen;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHulpverlenerOvernemen()
    {
      return $this->HulpverlenerOvernemen;
    }

    /**
     * @param boolean $HulpverlenerOvernemen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setHulpverlenerOvernemen($HulpverlenerOvernemen)
    {
      $this->HulpverlenerOvernemen = $HulpverlenerOvernemen;
      return $this;
    }

    /**
     * @return OpenVraagArray
     */
    public function getOpenVragen()
    {
      return $this->OpenVragen;
    }

    /**
     * @param OpenVraagArray $OpenVragen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setOpenVragen($OpenVragen)
    {
      $this->OpenVragen = $OpenVragen;
      return $this;
    }

    /**
     * @return GeslotenVraagArray
     */
    public function getGeslotenVragen()
    {
      return $this->GeslotenVragen;
    }

    /**
     * @param GeslotenVraagArray $GeslotenVragen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setGeslotenVragen($GeslotenVragen)
    {
      $this->GeslotenVragen = $GeslotenVragen;
      return $this;
    }

    /**
     * @return SchuldArray
     */
    public function getSchulden()
    {
      return $this->Schulden;
    }

    /**
     * @param SchuldArray $Schulden
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagSR
     */
    public function setSchulden($Schulden)
    {
      $this->Schulden = $Schulden;
      return $this;
    }

}
