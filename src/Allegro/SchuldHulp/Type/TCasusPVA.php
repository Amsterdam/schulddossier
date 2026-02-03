<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusPVA implements RequestInterface
{
    /**
     * @var int
     */
    private $VolgnummerPVA;

    /**
     * @var string
     */
    private $MedewerkerPVA;

    /**
     * @var string
     */
    private $TeamPVA;

    /**
     * @var \DateTimeInterface
     */
    private $DatumPVA;

    /**
     * @var \DateTimeInterface
     */
    private $DatumPVAEinde;

    /**
     * @var \DateTimeInterface
     */
    private $DatumFiattering;

    /**
     * @var \DateTimeInterface
     */
    private $DatumFiatteringEinde;

    /**
     * @var bool
     */
    private $Gefiatteerd;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAProductArray
     */
    private $Producten;

    /**
     * Constructor
     *
     * @var int $VolgnummerPVA
     * @var string $MedewerkerPVA
     * @var string $TeamPVA
     * @var \DateTimeInterface $DatumPVA
     * @var \DateTimeInterface $DatumPVAEinde
     * @var \DateTimeInterface $DatumFiattering
     * @var \DateTimeInterface $DatumFiatteringEinde
     * @var bool $Gefiatteerd
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAProductArray $Producten
     */
    public function __construct($VolgnummerPVA, $MedewerkerPVA, $TeamPVA, $DatumPVA, $DatumPVAEinde, $DatumFiattering, $DatumFiatteringEinde, $Gefiatteerd, $Producten)
    {
        $this->VolgnummerPVA = $VolgnummerPVA;
        $this->MedewerkerPVA = $MedewerkerPVA;
        $this->TeamPVA = $TeamPVA;
        $this->DatumPVA = $DatumPVA;
        $this->DatumPVAEinde = $DatumPVAEinde;
        $this->DatumFiattering = $DatumFiattering;
        $this->DatumFiatteringEinde = $DatumFiatteringEinde;
        $this->Gefiatteerd = $Gefiatteerd;
        $this->Producten = $Producten;
    }

    /**
     * @return int
     */
    public function getVolgnummerPVA()
    {
        return $this->VolgnummerPVA;
    }

    /**
     * @param int $VolgnummerPVA
     * @return TCasusPVA
     */
    public function withVolgnummerPVA($VolgnummerPVA)
    {
        $new = clone $this;
        $new->VolgnummerPVA = $VolgnummerPVA;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerkerPVA()
    {
        return $this->MedewerkerPVA;
    }

    /**
     * @param string $MedewerkerPVA
     * @return TCasusPVA
     */
    public function withMedewerkerPVA($MedewerkerPVA)
    {
        $new = clone $this;
        $new->MedewerkerPVA = $MedewerkerPVA;

        return $new;
    }

    /**
     * @return string
     */
    public function getTeamPVA()
    {
        return $this->TeamPVA;
    }

    /**
     * @param string $TeamPVA
     * @return TCasusPVA
     */
    public function withTeamPVA($TeamPVA)
    {
        $new = clone $this;
        $new->TeamPVA = $TeamPVA;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumPVA()
    {
        return $this->DatumPVA;
    }

    /**
     * @param \DateTimeInterface $DatumPVA
     * @return TCasusPVA
     */
    public function withDatumPVA($DatumPVA)
    {
        $new = clone $this;
        $new->DatumPVA = $DatumPVA;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumPVAEinde()
    {
        return $this->DatumPVAEinde;
    }

    /**
     * @param \DateTimeInterface $DatumPVAEinde
     * @return TCasusPVA
     */
    public function withDatumPVAEinde($DatumPVAEinde)
    {
        $new = clone $this;
        $new->DatumPVAEinde = $DatumPVAEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumFiattering()
    {
        return $this->DatumFiattering;
    }

    /**
     * @param \DateTimeInterface $DatumFiattering
     * @return TCasusPVA
     */
    public function withDatumFiattering($DatumFiattering)
    {
        $new = clone $this;
        $new->DatumFiattering = $DatumFiattering;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumFiatteringEinde()
    {
        return $this->DatumFiatteringEinde;
    }

    /**
     * @param \DateTimeInterface $DatumFiatteringEinde
     * @return TCasusPVA
     */
    public function withDatumFiatteringEinde($DatumFiatteringEinde)
    {
        $new = clone $this;
        $new->DatumFiatteringEinde = $DatumFiatteringEinde;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGefiatteerd()
    {
        return $this->Gefiatteerd;
    }

    /**
     * @param bool $Gefiatteerd
     * @return TCasusPVA
     */
    public function withGefiatteerd($Gefiatteerd)
    {
        $new = clone $this;
        $new->Gefiatteerd = $Gefiatteerd;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAProductArray
     */
    public function getProducten()
    {
        return $this->Producten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAProductArray $Producten
     * @return TCasusPVA
     */
    public function withProducten($Producten)
    {
        $new = clone $this;
        $new->Producten = $Producten;

        return $new;
    }
}
