<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBRHeader implements RequestInterface
{

    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var int
     */
    private $Opdrachtgever;

    /**
     * @var int
     */
    private $OpdrachtgeverContact;

    /**
     * @var string
     */
    private $VormCode;

    /**
     * @var string
     */
    private $VormNaam;

    /**
     * @var string
     */
    private $ProductNaam;

    /**
     * @var string
     */
    private $ProductOmschrijving;

    /**
     * @var string
     */
    private $Team;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var int $Volgnummer
     * @var string $Medewerker
     * @var int $Opdrachtgever
     * @var int $OpdrachtgeverContact
     * @var string $VormCode
     * @var string $VormNaam
     * @var string $ProductNaam
     * @var string $ProductOmschrijving
     * @var string $Team
     */
    public function __construct($RelatieCode, $Volgnummer, $Medewerker, $Opdrachtgever, $OpdrachtgeverContact, $VormCode, $VormNaam, $ProductNaam, $ProductOmschrijving, $Team)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Volgnummer = $Volgnummer;
        $this->Medewerker = $Medewerker;
        $this->Opdrachtgever = $Opdrachtgever;
        $this->OpdrachtgeverContact = $OpdrachtgeverContact;
        $this->VormCode = $VormCode;
        $this->VormNaam = $VormNaam;
        $this->ProductNaam = $ProductNaam;
        $this->ProductOmschrijving = $ProductOmschrijving;
        $this->Team = $Team;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TBBRHeader
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TBBRHeader
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return TBBRHeader
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever()
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return TBBRHeader
     */
    public function withOpdrachtgever($Opdrachtgever)
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact()
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return TBBRHeader
     */
    public function withOpdrachtgeverContact($OpdrachtgeverContact)
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return string
     */
    public function getVormCode()
    {
        return $this->VormCode;
    }

    /**
     * @param string $VormCode
     * @return TBBRHeader
     */
    public function withVormCode($VormCode)
    {
        $new = clone $this;
        $new->VormCode = $VormCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getVormNaam()
    {
        return $this->VormNaam;
    }

    /**
     * @param string $VormNaam
     * @return TBBRHeader
     */
    public function withVormNaam($VormNaam)
    {
        $new = clone $this;
        $new->VormNaam = $VormNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductNaam()
    {
        return $this->ProductNaam;
    }

    /**
     * @param string $ProductNaam
     * @return TBBRHeader
     */
    public function withProductNaam($ProductNaam)
    {
        $new = clone $this;
        $new->ProductNaam = $ProductNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductOmschrijving()
    {
        return $this->ProductOmschrijving;
    }

    /**
     * @param string $ProductOmschrijving
     * @return TBBRHeader
     */
    public function withProductOmschrijving($ProductOmschrijving)
    {
        $new = clone $this;
        $new->ProductOmschrijving = $ProductOmschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
        return $this->Team;
    }

    /**
     * @param string $Team
     * @return TBBRHeader
     */
    public function withTeam($Team)
    {
        $new = clone $this;
        $new->Team = $Team;

        return $new;
    }


}

