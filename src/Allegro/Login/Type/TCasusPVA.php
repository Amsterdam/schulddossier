<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TCasusPVA
{
    /**
     * @var int
     */
    private int $VolgnummerPVA;

    /**
     * @var string
     */
    private string $MedewerkerPVA;

    /**
     * @var string
     */
    private string $TeamPVA;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumPVA;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumPVAEinde;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumFiattering;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumFiatteringEinde;

    /**
     * @var bool
     */
    private bool $Gefiatteerd;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusPVAProductArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusPVAProductArray $Producten;

    /**
     * @return int
     */
    public function getVolgnummerPVA() : int
    {
        return $this->VolgnummerPVA;
    }

    /**
     * @param int $VolgnummerPVA
     * @return static
     */
    public function withVolgnummerPVA(int $VolgnummerPVA) : static
    {
        $new = clone $this;
        $new->VolgnummerPVA = $VolgnummerPVA;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerkerPVA() : string
    {
        return $this->MedewerkerPVA;
    }

    /**
     * @param string $MedewerkerPVA
     * @return static
     */
    public function withMedewerkerPVA(string $MedewerkerPVA) : static
    {
        $new = clone $this;
        $new->MedewerkerPVA = $MedewerkerPVA;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeamPVA() : string
    {
        return $this->TeamPVA;
    }

    /**
     * @param string $TeamPVA
     * @return static
     */
    public function withTeamPVA(string $TeamPVA) : static
    {
        $new = clone $this;
        $new->TeamPVA = $TeamPVA;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumPVA() : \DateTimeInterface
    {
        return $this->DatumPVA;
    }

    /**
     * @param \DateTimeInterface $DatumPVA
     * @return static
     */
    public function withDatumPVA(\DateTimeInterface $DatumPVA) : static
    {
        $new = clone $this;
        $new->DatumPVA = $DatumPVA;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumPVAEinde() : \DateTimeInterface
    {
        return $this->DatumPVAEinde;
    }

    /**
     * @param \DateTimeInterface $DatumPVAEinde
     * @return static
     */
    public function withDatumPVAEinde(\DateTimeInterface $DatumPVAEinde) : static
    {
        $new = clone $this;
        $new->DatumPVAEinde = $DatumPVAEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumFiattering() : \DateTimeInterface
    {
        return $this->DatumFiattering;
    }

    /**
     * @param \DateTimeInterface $DatumFiattering
     * @return static
     */
    public function withDatumFiattering(\DateTimeInterface $DatumFiattering) : static
    {
        $new = clone $this;
        $new->DatumFiattering = $DatumFiattering;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumFiatteringEinde() : \DateTimeInterface
    {
        return $this->DatumFiatteringEinde;
    }

    /**
     * @param \DateTimeInterface $DatumFiatteringEinde
     * @return static
     */
    public function withDatumFiatteringEinde(\DateTimeInterface $DatumFiatteringEinde) : static
    {
        $new = clone $this;
        $new->DatumFiatteringEinde = $DatumFiatteringEinde;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGefiatteerd() : bool
    {
        return $this->Gefiatteerd;
    }

    /**
     * @param bool $Gefiatteerd
     * @return static
     */
    public function withGefiatteerd(bool $Gefiatteerd) : static
    {
        $new = clone $this;
        $new->Gefiatteerd = $Gefiatteerd;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusPVAProductArray
     */
    public function getProducten() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusPVAProductArray
    {
        return $this->Producten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusPVAProductArray $Producten
     * @return static
     */
    public function withProducten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusPVAProductArray $Producten) : static
    {
        $new = clone $this;
        $new->Producten = $Producten;

        return $new;
    }
}

