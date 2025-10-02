<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TSRVAanvraagHeader
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
     * @var bool
     */
    private bool $IsNPS;

    /**
     * @var string
     */
    private string $Status;

    /**
     * @var string
     */
    private string $Statustekst;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Aanvraagdatum;

    /**
     * @var string
     */
    private string $ExtraStatus;

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
     * @return bool
     */
    public function getIsNPS() : bool
    {
        return $this->IsNPS;
    }

    /**
     * @param bool $IsNPS
     * @return static
     */
    public function withIsNPS(bool $IsNPS) : static
    {
        $new = clone $this;
        $new->IsNPS = $IsNPS;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return static
     */
    public function withStatus(string $Status) : static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatustekst() : string
    {
        return $this->Statustekst;
    }

    /**
     * @param string $Statustekst
     * @return static
     */
    public function withStatustekst(string $Statustekst) : static
    {
        $new = clone $this;
        $new->Statustekst = $Statustekst;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAanvraagdatum() : \DateTimeInterface
    {
        return $this->Aanvraagdatum;
    }

    /**
     * @param \DateTimeInterface $Aanvraagdatum
     * @return static
     */
    public function withAanvraagdatum(\DateTimeInterface $Aanvraagdatum) : static
    {
        $new = clone $this;
        $new->Aanvraagdatum = $Aanvraagdatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtraStatus() : string
    {
        return $this->ExtraStatus;
    }

    /**
     * @param string $ExtraStatus
     * @return static
     */
    public function withExtraStatus(string $ExtraStatus) : static
    {
        $new = clone $this;
        $new->ExtraStatus = $ExtraStatus;

        return $new;
    }
}

