<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TCasusHeader
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var string
     */
    private string $CasusCode;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Aanmaakdatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ECasusStatus
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ECasusStatus $CasusStatus;

    /**
     * @var string
     */
    private string $CasusStatusTekst;

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

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
    public function getCasusCode() : string
    {
        return $this->CasusCode;
    }

    /**
     * @param string $CasusCode
     * @return static
     */
    public function withCasusCode(string $CasusCode) : static
    {
        $new = clone $this;
        $new->CasusCode = $CasusCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAanmaakdatum() : \DateTimeInterface
    {
        return $this->Aanmaakdatum;
    }

    /**
     * @param \DateTimeInterface $Aanmaakdatum
     * @return static
     */
    public function withAanmaakdatum(\DateTimeInterface $Aanmaakdatum) : static
    {
        $new = clone $this;
        $new->Aanmaakdatum = $Aanmaakdatum;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ECasusStatus
     */
    public function getCasusStatus() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ECasusStatus
    {
        return $this->CasusStatus;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ECasusStatus $CasusStatus
     * @return static
     */
    public function withCasusStatus(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ECasusStatus $CasusStatus) : static
    {
        $new = clone $this;
        $new->CasusStatus = $CasusStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusStatusTekst() : string
    {
        return $this->CasusStatusTekst;
    }

    /**
     * @param string $CasusStatusTekst
     * @return static
     */
    public function withCasusStatusTekst(string $CasusStatusTekst) : static
    {
        $new = clone $this;
        $new->CasusStatusTekst = $CasusStatusTekst;

        return $new;
    }
}

