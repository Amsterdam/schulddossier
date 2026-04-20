<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSRVAanvraagHeader implements RequestInterface
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
     * @var bool
     */
    private $IsNPS;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var string
     */
    private $Statustekst;

    /**
     * @var \DateTimeInterface
     */
    private $Aanvraagdatum;

    /**
     * @var string
     */
    private $ExtraStatus;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var int $Volgnummer
     * @var bool $IsNPS
     * @var string $Status
     * @var string $Statustekst
     * @var \DateTimeInterface $Aanvraagdatum
     * @var string $ExtraStatus
     */
    public function __construct($RelatieCode, $Volgnummer, $IsNPS, $Status, $Statustekst, $Aanvraagdatum, $ExtraStatus)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Volgnummer = $Volgnummer;
        $this->IsNPS = $IsNPS;
        $this->Status = $Status;
        $this->Statustekst = $Statustekst;
        $this->Aanvraagdatum = $Aanvraagdatum;
        $this->ExtraStatus = $ExtraStatus;
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
     * @return TSRVAanvraagHeader
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
     * @return TSRVAanvraagHeader
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsNPS()
    {
        return $this->IsNPS;
    }

    /**
     * @param bool $IsNPS
     * @return TSRVAanvraagHeader
     */
    public function withIsNPS($IsNPS)
    {
        $new = clone $this;
        $new->IsNPS = $IsNPS;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return TSRVAanvraagHeader
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatustekst()
    {
        return $this->Statustekst;
    }

    /**
     * @param string $Statustekst
     * @return TSRVAanvraagHeader
     */
    public function withStatustekst($Statustekst)
    {
        $new = clone $this;
        $new->Statustekst = $Statustekst;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAanvraagdatum()
    {
        return $this->Aanvraagdatum;
    }

    /**
     * @param \DateTimeInterface $Aanvraagdatum
     * @return TSRVAanvraagHeader
     */
    public function withAanvraagdatum($Aanvraagdatum)
    {
        $new = clone $this;
        $new->Aanvraagdatum = $Aanvraagdatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtraStatus()
    {
        return $this->ExtraStatus;
    }

    /**
     * @param string $ExtraStatus
     * @return TSRVAanvraagHeader
     */
    public function withExtraStatus($ExtraStatus)
    {
        $new = clone $this;
        $new->ExtraStatus = $ExtraStatus;

        return $new;
    }
}
