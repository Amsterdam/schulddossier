<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanvraag2DK extends TAanvraag2
{

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
      parent::__construct($Bedrijfscode, $Aanvrager, $MetPartner, $GezinsSituatie, $AantalKinderen, $Schuldbedrag, $Schuldeisers, $GewenstKrediet, $GewenstAflossing, $OpdrachtgeverCode, $Borgstelling, $CollectieveBorgstelling);
    }

}
