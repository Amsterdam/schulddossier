<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TCasusHeader implements RequestInterface
{

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var string
     */
    private $CasusCode;

    /**
     * @var DateTimeInterface
     */
    private $Aanmaakdatum;

    /**
     * @var string
     */
    private $CasusStatus;

    /**
     * @var string
     */
    private $CasusStatusTekst;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var int $Volgnummer
     * @var string $CasusCode
     * @var DateTimeInterface $Aanmaakdatum
     * @var string $CasusStatus
     * @var string $CasusStatusTekst
     */
    public function __construct($Relatiecode, $Volgnummer, $CasusCode, $Aanmaakdatum, $CasusStatus, $CasusStatusTekst)
    {
        $this->Relatiecode = $Relatiecode;
        $this->Volgnummer = $Volgnummer;
        $this->CasusCode = $CasusCode;
        $this->Aanmaakdatum = $Aanmaakdatum;
        $this->CasusStatus = $CasusStatus;
        $this->CasusStatusTekst = $CasusStatusTekst;
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return TCasusHeader
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

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
     * @return TCasusHeader
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
    public function getCasusCode()
    {
        return $this->CasusCode;
    }

    /**
     * @param string $CasusCode
     * @return TCasusHeader
     */
    public function withCasusCode($CasusCode)
    {
        $new = clone $this;
        $new->CasusCode = $CasusCode;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getAanmaakdatum()
    {
        return $this->Aanmaakdatum;
    }

    /**
     * @param DateTimeInterface $Aanmaakdatum
     * @return TCasusHeader
     */
    public function withAanmaakdatum($Aanmaakdatum)
    {
        $new = clone $this;
        $new->Aanmaakdatum = $Aanmaakdatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusStatus()
    {
        return $this->CasusStatus;
    }

    /**
     * @param string $CasusStatus
     * @return TCasusHeader
     */
    public function withCasusStatus($CasusStatus)
    {
        $new = clone $this;
        $new->CasusStatus = $CasusStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusStatusTekst()
    {
        return $this->CasusStatusTekst;
    }

    /**
     * @param string $CasusStatusTekst
     * @return TCasusHeader
     */
    public function withCasusStatusTekst($CasusStatusTekst)
    {
        $new = clone $this;
        $new->CasusStatusTekst = $CasusStatusTekst;

        return $new;
    }


}

