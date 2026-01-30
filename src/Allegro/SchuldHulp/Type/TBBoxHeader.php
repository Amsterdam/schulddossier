<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxHeader implements RequestInterface
{
    /**
     * @var int
     */
    private $Code;

    /**
     * @var string
     */
    private $AfzenderOntvanger;

    /**
     * @var string
     */
    private $Onderwerp;

    /**
     * @var \DateTimeInterface
     */
    private $Tijdstip;

    /**
     * @var bool
     */
    private $IndicatieOntvangen;

    /**
     * @var bool
     */
    private $IndicatieGelezen;

    /**
     * @var bool
     */
    private $IndicatieArchief;

    /**
     * @var bool
     */
    private $IndicatieBijlage;

    /**
     * Constructor
     *
     * @var int $Code
     * @var string $AfzenderOntvanger
     * @var string $Onderwerp
     * @var \DateTimeInterface $Tijdstip
     * @var bool $IndicatieOntvangen
     * @var bool $IndicatieGelezen
     * @var bool $IndicatieArchief
     * @var bool $IndicatieBijlage
     */
    public function __construct($Code, $AfzenderOntvanger, $Onderwerp, $Tijdstip, $IndicatieOntvangen, $IndicatieGelezen, $IndicatieArchief, $IndicatieBijlage)
    {
        $this->Code = $Code;
        $this->AfzenderOntvanger = $AfzenderOntvanger;
        $this->Onderwerp = $Onderwerp;
        $this->Tijdstip = $Tijdstip;
        $this->IndicatieOntvangen = $IndicatieOntvangen;
        $this->IndicatieGelezen = $IndicatieGelezen;
        $this->IndicatieArchief = $IndicatieArchief;
        $this->IndicatieBijlage = $IndicatieBijlage;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return TBBoxHeader
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfzenderOntvanger()
    {
        return $this->AfzenderOntvanger;
    }

    /**
     * @param string $AfzenderOntvanger
     * @return TBBoxHeader
     */
    public function withAfzenderOntvanger($AfzenderOntvanger)
    {
        $new = clone $this;
        $new->AfzenderOntvanger = $AfzenderOntvanger;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnderwerp()
    {
        return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return TBBoxHeader
     */
    public function withOnderwerp($Onderwerp)
    {
        $new = clone $this;
        $new->Onderwerp = $Onderwerp;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTijdstip()
    {
        return $this->Tijdstip;
    }

    /**
     * @param \DateTimeInterface $Tijdstip
     * @return TBBoxHeader
     */
    public function withTijdstip($Tijdstip)
    {
        $new = clone $this;
        $new->Tijdstip = $Tijdstip;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieOntvangen()
    {
        return $this->IndicatieOntvangen;
    }

    /**
     * @param bool $IndicatieOntvangen
     * @return TBBoxHeader
     */
    public function withIndicatieOntvangen($IndicatieOntvangen)
    {
        $new = clone $this;
        $new->IndicatieOntvangen = $IndicatieOntvangen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieGelezen()
    {
        return $this->IndicatieGelezen;
    }

    /**
     * @param bool $IndicatieGelezen
     * @return TBBoxHeader
     */
    public function withIndicatieGelezen($IndicatieGelezen)
    {
        $new = clone $this;
        $new->IndicatieGelezen = $IndicatieGelezen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieArchief()
    {
        return $this->IndicatieArchief;
    }

    /**
     * @param bool $IndicatieArchief
     * @return TBBoxHeader
     */
    public function withIndicatieArchief($IndicatieArchief)
    {
        $new = clone $this;
        $new->IndicatieArchief = $IndicatieArchief;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIndicatieBijlage()
    {
        return $this->IndicatieBijlage;
    }

    /**
     * @param bool $IndicatieBijlage
     * @return TBBoxHeader
     */
    public function withIndicatieBijlage($IndicatieBijlage)
    {
        $new = clone $this;
        $new->IndicatieBijlage = $IndicatieBijlage;

        return $new;
    }
}
