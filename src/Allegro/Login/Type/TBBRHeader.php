<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBRHeader
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var int
     */
    private int $Opdrachtgever;

    /**
     * @var int
     */
    private int $OpdrachtgeverContact;

    /**
     * @var string
     */
    private string $VormCode;

    /**
     * @var string
     */
    private string $VormNaam;

    /**
     * @var string
     */
    private string $ProductNaam;

    /**
     * @var string
     */
    private string $ProductOmschrijving;

    /**
     * @var string
     */
    private string $Team;

    /**
     * @return int
     */
    public function getRelatieCode() : int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode) : static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer() : int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer) : static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker() : string
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return static
     */
    public function withMedewerker(string $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever() : int
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return static
     */
    public function withOpdrachtgever(int $Opdrachtgever) : static
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact() : int
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return static
     */
    public function withOpdrachtgeverContact(int $OpdrachtgeverContact) : static
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return string
     */
    public function getVormCode() : string
    {
        return $this->VormCode;
    }

    /**
     * @param string $VormCode
     * @return static
     */
    public function withVormCode(string $VormCode) : static
    {
        $new = clone $this;
        $new->VormCode = $VormCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getVormNaam() : string
    {
        return $this->VormNaam;
    }

    /**
     * @param string $VormNaam
     * @return static
     */
    public function withVormNaam(string $VormNaam) : static
    {
        $new = clone $this;
        $new->VormNaam = $VormNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductNaam() : string
    {
        return $this->ProductNaam;
    }

    /**
     * @param string $ProductNaam
     * @return static
     */
    public function withProductNaam(string $ProductNaam) : static
    {
        $new = clone $this;
        $new->ProductNaam = $ProductNaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductOmschrijving() : string
    {
        return $this->ProductOmschrijving;
    }

    /**
     * @param string $ProductOmschrijving
     * @return static
     */
    public function withProductOmschrijving(string $ProductOmschrijving) : static
    {
        $new = clone $this;
        $new->ProductOmschrijving = $ProductOmschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeam() : string
    {
        return $this->Team;
    }

    /**
     * @param string $Team
     * @return static
     */
    public function withTeam(string $Team) : static
    {
        $new = clone $this;
        $new->Team = $Team;

        return $new;
    }
}

