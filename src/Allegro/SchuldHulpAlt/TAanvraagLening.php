<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanvraagLening extends TAanvraag
{

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
     * @param SchuldArray $Schulden
     */
    public function __construct($Aanvrager, $MetPartner, $Partner, $Bezoekadres, $Postadres, $Contact, $CorrespondentieMail, $GezinsSituatie, $AantalKinderen, $ToelichtingKinderen, $InkomenAanvrager, $InkomenPartner, $Uitgaven, $Schuldbedrag, $Schuldeisers, $SoortLening, $GewenstKrediet, $GewenstAflossing, $Bestedingsdoel, $Indiener, $HulpverlenerNaam, $OpdrachtgeverCode, $Contactpersoon, $KredietSoort, $Borgstelling, $Toelichting, $CollectieveBorgstelling, $Schulden)
    {
      parent::__construct($Aanvrager, $MetPartner, $Partner, $Bezoekadres, $Postadres, $Contact, $CorrespondentieMail, $GezinsSituatie, $AantalKinderen, $ToelichtingKinderen, $InkomenAanvrager, $InkomenPartner, $Uitgaven, $Schuldbedrag, $Schuldeisers, $SoortLening, $GewenstKrediet, $GewenstAflossing, $Bestedingsdoel, $Indiener, $HulpverlenerNaam, $OpdrachtgeverCode, $Contactpersoon, $KredietSoort, $Borgstelling, $Toelichting, $CollectieveBorgstelling);
      $this->Schulden = $Schulden;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraagLening
     */
    public function setSchulden($Schulden)
    {
      $this->Schulden = $Schulden;
      return $this;
    }

}
