<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBoxHeader
{
    /**
     * @var int
     */
    private int $Code;

    /**
     * @var string
     */
    private string $AfzenderOntvanger;

    /**
     * @var string
     */
    private string $Onderwerp;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Tijdstip;

    /**
     * @var bool
     */
    private bool $IndicatieOntvangen;

    /**
     * @var bool
     */
    private bool $IndicatieGelezen;

    /**
     * @var bool
     */
    private bool $IndicatieArchief;

    /**
     * @var bool
     */
    private bool $IndicatieBijlage;

    /**
     * @return int
     */
    public function getCode() : int
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return static
     */
    public function withCode(int $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfzenderOntvanger() : string
    {
        return $this->AfzenderOntvanger;
    }

    /**
     * @param string $AfzenderOntvanger
     * @return static
     */
    public function withAfzenderOntvanger(string $AfzenderOntvanger) : static
    {
        $new = clone $this;
        $new->AfzenderOntvanger = $AfzenderOntvanger;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnderwerp() : string
    {
        return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return static
     */
    public function withOnderwerp(string $Onderwerp) : static
    {
        $new = clone $this;
        $new->Onderwerp = $Onderwerp;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTijdstip() : \DateTimeInterface
    {
        return $this->Tijdstip;
    }

    /**
     * @param \DateTimeInterface $Tijdstip
     * @return static
     */
    public function withTijdstip(\DateTimeInterface $Tijdstip) : static
    {
        $new = clone $this;
        $new->Tijdstip = $Tijdstip;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieOntvangen() : bool
    {
        return $this->IndicatieOntvangen;
    }

    /**
     * @param bool $IndicatieOntvangen
     * @return static
     */
    public function withIndicatieOntvangen(bool $IndicatieOntvangen) : static
    {
        $new = clone $this;
        $new->IndicatieOntvangen = $IndicatieOntvangen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieGelezen() : bool
    {
        return $this->IndicatieGelezen;
    }

    /**
     * @param bool $IndicatieGelezen
     * @return static
     */
    public function withIndicatieGelezen(bool $IndicatieGelezen) : static
    {
        $new = clone $this;
        $new->IndicatieGelezen = $IndicatieGelezen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieArchief() : bool
    {
        return $this->IndicatieArchief;
    }

    /**
     * @param bool $IndicatieArchief
     * @return static
     */
    public function withIndicatieArchief(bool $IndicatieArchief) : static
    {
        $new = clone $this;
        $new->IndicatieArchief = $IndicatieArchief;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieBijlage() : bool
    {
        return $this->IndicatieBijlage;
    }

    /**
     * @param bool $IndicatieBijlage
     * @return static
     */
    public function withIndicatieBijlage(bool $IndicatieBijlage) : static
    {
        $new = clone $this;
        $new->IndicatieBijlage = $IndicatieBijlage;

        return $new;
    }
}

