<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TPandBericht
{
    /**
     * @var string
     */
    private $SoortMutatie;

    /**
     * @var \DateTimeInterface
     */
    private $Datum;

    /**
     * @var \DateTimeInterface
     */
    private $Tijdstip;

    /**
     * @var string
     */
    private $Pandnummer;

    /**
     * @var float
     */
    private $BedragBetaald;

    /**
     * @var string
     */
    private $iDealKenmerk;

    /**
     * @var float
     */
    private $iDealTotaalBedrag;

    /**
     * @return string
     */
    public function getSoortMutatie()
    {
        return $this->SoortMutatie;
    }

    /**
     * @param string $SoortMutatie
     * @return TPandBericht
     */
    public function withSoortMutatie($SoortMutatie)
    {
        $new = clone $this;
        $new->SoortMutatie = $SoortMutatie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatum()
    {
        return $this->Datum;
    }

    /**
     * @param \DateTimeInterface $Datum
     * @return TPandBericht
     */
    public function withDatum($Datum)
    {
        $new = clone $this;
        $new->Datum = $Datum;

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
     * @return TPandBericht
     */
    public function withTijdstip($Tijdstip)
    {
        $new = clone $this;
        $new->Tijdstip = $Tijdstip;

        return $new;
    }

    /**
     * @return string
     */
    public function getPandnummer()
    {
        return $this->Pandnummer;
    }

    /**
     * @param string $Pandnummer
     * @return TPandBericht
     */
    public function withPandnummer($Pandnummer)
    {
        $new = clone $this;
        $new->Pandnummer = $Pandnummer;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragBetaald()
    {
        return $this->BedragBetaald;
    }

    /**
     * @param float $BedragBetaald
     * @return TPandBericht
     */
    public function withBedragBetaald($BedragBetaald)
    {
        $new = clone $this;
        $new->BedragBetaald = $BedragBetaald;

        return $new;
    }

    /**
     * @return string
     */
    public function getIDealKenmerk()
    {
        return $this->iDealKenmerk;
    }

    /**
     * @param string $iDealKenmerk
     * @return TPandBericht
     */
    public function withIDealKenmerk($iDealKenmerk)
    {
        $new = clone $this;
        $new->iDealKenmerk = $iDealKenmerk;

        return $new;
    }

    /**
     * @return float
     */
    public function getIDealTotaalBedrag()
    {
        return $this->iDealTotaalBedrag;
    }

    /**
     * @param float $iDealTotaalBedrag
     * @return TPandBericht
     */
    public function withIDealTotaalBedrag($iDealTotaalBedrag)
    {
        $new = clone $this;
        $new->iDealTotaalBedrag = $iDealTotaalBedrag;

        return $new;
    }
}

