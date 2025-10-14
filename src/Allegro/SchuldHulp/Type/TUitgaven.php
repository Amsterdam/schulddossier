<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TUitgaven
{
    /**
     * @var string
     */
    private $WoningSoort;

    /**
     * @var float
     */
    private $Kostgeld;

    /**
     * @var float
     */
    private $Huur;

    /**
     * @var float
     */
    private $Huurtoeslag;

    /**
     * @var float
     */
    private $MaandHypotheek;

    /**
     * @var float
     */
    private $MaandTeruggave;

    /**
     * @var float
     */
    private $SaldoHypotheek;

    /**
     * @var float
     */
    private $WOZWaarde;

    /**
     * @var float
     */
    private $Zorgpremie;

    /**
     * @var float
     */
    private $Zorgtoeslag;

    /**
     * @var float
     */
    private $KinderAlimentatieBedrag;

    /**
     * @var float
     */
    private $PartnerAlimentatieBedrag;

    /**
     * @var string
     */
    private $OverigUitgaven;

    /**
     * @var string
     */
    private $Toelichting;

    /**
     * @return string
     */
    public function getWoningSoort()
    {
        return $this->WoningSoort;
    }

    /**
     * @param string $WoningSoort
     * @return TUitgaven
     */
    public function withWoningSoort($WoningSoort)
    {
        $new = clone $this;
        $new->WoningSoort = $WoningSoort;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostgeld()
    {
        return $this->Kostgeld;
    }

    /**
     * @param float $Kostgeld
     * @return TUitgaven
     */
    public function withKostgeld($Kostgeld)
    {
        $new = clone $this;
        $new->Kostgeld = $Kostgeld;

        return $new;
    }

    /**
     * @return float
     */
    public function getHuur()
    {
        return $this->Huur;
    }

    /**
     * @param float $Huur
     * @return TUitgaven
     */
    public function withHuur($Huur)
    {
        $new = clone $this;
        $new->Huur = $Huur;

        return $new;
    }

    /**
     * @return float
     */
    public function getHuurtoeslag()
    {
        return $this->Huurtoeslag;
    }

    /**
     * @param float $Huurtoeslag
     * @return TUitgaven
     */
    public function withHuurtoeslag($Huurtoeslag)
    {
        $new = clone $this;
        $new->Huurtoeslag = $Huurtoeslag;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandHypotheek()
    {
        return $this->MaandHypotheek;
    }

    /**
     * @param float $MaandHypotheek
     * @return TUitgaven
     */
    public function withMaandHypotheek($MaandHypotheek)
    {
        $new = clone $this;
        $new->MaandHypotheek = $MaandHypotheek;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandTeruggave()
    {
        return $this->MaandTeruggave;
    }

    /**
     * @param float $MaandTeruggave
     * @return TUitgaven
     */
    public function withMaandTeruggave($MaandTeruggave)
    {
        $new = clone $this;
        $new->MaandTeruggave = $MaandTeruggave;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldoHypotheek()
    {
        return $this->SaldoHypotheek;
    }

    /**
     * @param float $SaldoHypotheek
     * @return TUitgaven
     */
    public function withSaldoHypotheek($SaldoHypotheek)
    {
        $new = clone $this;
        $new->SaldoHypotheek = $SaldoHypotheek;

        return $new;
    }

    /**
     * @return float
     */
    public function getWOZWaarde()
    {
        return $this->WOZWaarde;
    }

    /**
     * @param float $WOZWaarde
     * @return TUitgaven
     */
    public function withWOZWaarde($WOZWaarde)
    {
        $new = clone $this;
        $new->WOZWaarde = $WOZWaarde;

        return $new;
    }

    /**
     * @return float
     */
    public function getZorgpremie()
    {
        return $this->Zorgpremie;
    }

    /**
     * @param float $Zorgpremie
     * @return TUitgaven
     */
    public function withZorgpremie($Zorgpremie)
    {
        $new = clone $this;
        $new->Zorgpremie = $Zorgpremie;

        return $new;
    }

    /**
     * @return float
     */
    public function getZorgtoeslag()
    {
        return $this->Zorgtoeslag;
    }

    /**
     * @param float $Zorgtoeslag
     * @return TUitgaven
     */
    public function withZorgtoeslag($Zorgtoeslag)
    {
        $new = clone $this;
        $new->Zorgtoeslag = $Zorgtoeslag;

        return $new;
    }

    /**
     * @return float
     */
    public function getKinderAlimentatieBedrag()
    {
        return $this->KinderAlimentatieBedrag;
    }

    /**
     * @param float $KinderAlimentatieBedrag
     * @return TUitgaven
     */
    public function withKinderAlimentatieBedrag($KinderAlimentatieBedrag)
    {
        $new = clone $this;
        $new->KinderAlimentatieBedrag = $KinderAlimentatieBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getPartnerAlimentatieBedrag()
    {
        return $this->PartnerAlimentatieBedrag;
    }

    /**
     * @param float $PartnerAlimentatieBedrag
     * @return TUitgaven
     */
    public function withPartnerAlimentatieBedrag($PartnerAlimentatieBedrag)
    {
        $new = clone $this;
        $new->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;

        return $new;
    }

    /**
     * @return string
     */
    public function getOverigUitgaven()
    {
        return $this->OverigUitgaven;
    }

    /**
     * @param string $OverigUitgaven
     * @return TUitgaven
     */
    public function withOverigUitgaven($OverigUitgaven)
    {
        $new = clone $this;
        $new->OverigUitgaven = $OverigUitgaven;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichting()
    {
        return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return TUitgaven
     */
    public function withToelichting($Toelichting)
    {
        $new = clone $this;
        $new->Toelichting = $Toelichting;

        return $new;
    }
}

