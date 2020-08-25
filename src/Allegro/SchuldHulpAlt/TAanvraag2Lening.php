<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanvraag2Lening extends TAanvraag2
{

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
     * @param SchuldArray $Schulden
     */
    public function __construct($Bedrijfscode, $Aanvrager, $MetPartner, $GezinsSituatie, $AantalKinderen, $Schuldbedrag, $Schuldeisers, $GewenstKrediet, $GewenstAflossing, $OpdrachtgeverCode, $Borgstelling, $CollectieveBorgstelling, $Schulden)
    {
      parent::__construct($Bedrijfscode, $Aanvrager, $MetPartner, $GezinsSituatie, $AantalKinderen, $Schuldbedrag, $Schuldeisers, $GewenstKrediet, $GewenstAflossing, $OpdrachtgeverCode, $Borgstelling, $CollectieveBorgstelling);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Lening
     */
    public function setSchulden($Schulden)
    {
      $this->Schulden = $Schulden;
      return $this;
    }

}
