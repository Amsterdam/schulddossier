<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanvraag2SR extends TAanvraag2
{

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
     * @param boolean $NPS
     * @param boolean $TotaalschuldVullen
     * @param boolean $OpdrachtgeverOvernemen
     * @param boolean $HulpverlenerOvernemen
     */
    public function __construct($Bedrijfscode, $Aanvrager, $MetPartner, $GezinsSituatie, $AantalKinderen, $Schuldbedrag, $Schuldeisers, $GewenstKrediet, $GewenstAflossing, $OpdrachtgeverCode, $Borgstelling, $CollectieveBorgstelling, $NPS, $TotaalschuldVullen, $OpdrachtgeverOvernemen, $HulpverlenerOvernemen)
    {
      parent::__construct($Bedrijfscode, $Aanvrager, $MetPartner, $GezinsSituatie, $AantalKinderen, $Schuldbedrag, $Schuldeisers, $GewenstKrediet, $GewenstAflossing, $OpdrachtgeverCode, $Borgstelling, $CollectieveBorgstelling);
      $this->NPS = $NPS;
      $this->TotaalschuldVullen = $TotaalschuldVullen;
      $this->OpdrachtgeverOvernemen = $OpdrachtgeverOvernemen;
      $this->HulpverlenerOvernemen = $HulpverlenerOvernemen;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR
     */
    public function setSchulden($Schulden)
    {
      $this->Schulden = $Schulden;
      return $this;
    }

}
