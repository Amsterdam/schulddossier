<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TUitgaven implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EWoningSoort
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EWoningSoort $WoningSoort;

    /**
     * @var float
     */
    private float $Kostgeld;

    /**
     * @var float
     */
    private float $Huur;

    /**
     * @var float
     */
    private float $Huurtoeslag;

    /**
     * @var float
     */
    private float $MaandHypotheek;

    /**
     * @var float
     */
    private float $MaandTeruggave;

    /**
     * @var float
     */
    private float $SaldoHypotheek;

    /**
     * @var float
     */
    private float $WOZWaarde;

    /**
     * @var float
     */
    private float $Zorgpremie;

    /**
     * @var float
     */
    private float $Zorgtoeslag;

    /**
     * @var float
     */
    private float $KinderAlimentatieBedrag;

    /**
     * @var float
     */
    private float $PartnerAlimentatieBedrag;

    /**
     * @var string
     */
    private string $OverigUitgaven;

    /**
     * @var string
     */
    private string $Toelichting;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EWoningSoort $WoningSoort
     * @param float $Kostgeld
     * @param float $Huur
     * @param float $Huurtoeslag
     * @param float $MaandHypotheek
     * @param float $MaandTeruggave
     * @param float $SaldoHypotheek
     * @param float $WOZWaarde
     * @param float $Zorgpremie
     * @param float $Zorgtoeslag
     * @param float $KinderAlimentatieBedrag
     * @param float $PartnerAlimentatieBedrag
     * @param string $OverigUitgaven
     * @param string $Toelichting
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EWoningSoort $WoningSoort, float $Kostgeld, float $Huur, float $Huurtoeslag, float $MaandHypotheek, float $MaandTeruggave, float $SaldoHypotheek, float $WOZWaarde, float $Zorgpremie, float $Zorgtoeslag, float $KinderAlimentatieBedrag, float $PartnerAlimentatieBedrag, string $OverigUitgaven, string $Toelichting)
    {
        $this->WoningSoort = $WoningSoort;
        $this->Kostgeld = $Kostgeld;
        $this->Huur = $Huur;
        $this->Huurtoeslag = $Huurtoeslag;
        $this->MaandHypotheek = $MaandHypotheek;
        $this->MaandTeruggave = $MaandTeruggave;
        $this->SaldoHypotheek = $SaldoHypotheek;
        $this->WOZWaarde = $WOZWaarde;
        $this->Zorgpremie = $Zorgpremie;
        $this->Zorgtoeslag = $Zorgtoeslag;
        $this->KinderAlimentatieBedrag = $KinderAlimentatieBedrag;
        $this->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;
        $this->OverigUitgaven = $OverigUitgaven;
        $this->Toelichting = $Toelichting;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EWoningSoort
     */
    public function getWoningSoort() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EWoningSoort
    {
        return $this->WoningSoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EWoningSoort $WoningSoort
     * @return static
     */
    public function withWoningSoort(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EWoningSoort $WoningSoort) : static
    {
        $new = clone $this;
        $new->WoningSoort = $WoningSoort;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostgeld() : float
    {
        return $this->Kostgeld;
    }

    /**
     * @param float $Kostgeld
     * @return static
     */
    public function withKostgeld(float $Kostgeld) : static
    {
        $new = clone $this;
        $new->Kostgeld = $Kostgeld;

        return $new;
    }

    /**
     * @return float
     */
    public function getHuur() : float
    {
        return $this->Huur;
    }

    /**
     * @param float $Huur
     * @return static
     */
    public function withHuur(float $Huur) : static
    {
        $new = clone $this;
        $new->Huur = $Huur;

        return $new;
    }

    /**
     * @return float
     */
    public function getHuurtoeslag() : float
    {
        return $this->Huurtoeslag;
    }

    /**
     * @param float $Huurtoeslag
     * @return static
     */
    public function withHuurtoeslag(float $Huurtoeslag) : static
    {
        $new = clone $this;
        $new->Huurtoeslag = $Huurtoeslag;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandHypotheek() : float
    {
        return $this->MaandHypotheek;
    }

    /**
     * @param float $MaandHypotheek
     * @return static
     */
    public function withMaandHypotheek(float $MaandHypotheek) : static
    {
        $new = clone $this;
        $new->MaandHypotheek = $MaandHypotheek;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandTeruggave() : float
    {
        return $this->MaandTeruggave;
    }

    /**
     * @param float $MaandTeruggave
     * @return static
     */
    public function withMaandTeruggave(float $MaandTeruggave) : static
    {
        $new = clone $this;
        $new->MaandTeruggave = $MaandTeruggave;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldoHypotheek() : float
    {
        return $this->SaldoHypotheek;
    }

    /**
     * @param float $SaldoHypotheek
     * @return static
     */
    public function withSaldoHypotheek(float $SaldoHypotheek) : static
    {
        $new = clone $this;
        $new->SaldoHypotheek = $SaldoHypotheek;

        return $new;
    }

    /**
     * @return float
     */
    public function getWOZWaarde() : float
    {
        return $this->WOZWaarde;
    }

    /**
     * @param float $WOZWaarde
     * @return static
     */
    public function withWOZWaarde(float $WOZWaarde) : static
    {
        $new = clone $this;
        $new->WOZWaarde = $WOZWaarde;

        return $new;
    }

    /**
     * @return float
     */
    public function getZorgpremie() : float
    {
        return $this->Zorgpremie;
    }

    /**
     * @param float $Zorgpremie
     * @return static
     */
    public function withZorgpremie(float $Zorgpremie) : static
    {
        $new = clone $this;
        $new->Zorgpremie = $Zorgpremie;

        return $new;
    }

    /**
     * @return float
     */
    public function getZorgtoeslag() : float
    {
        return $this->Zorgtoeslag;
    }

    /**
     * @param float $Zorgtoeslag
     * @return static
     */
    public function withZorgtoeslag(float $Zorgtoeslag) : static
    {
        $new = clone $this;
        $new->Zorgtoeslag = $Zorgtoeslag;

        return $new;
    }

    /**
     * @return float
     */
    public function getKinderAlimentatieBedrag() : float
    {
        return $this->KinderAlimentatieBedrag;
    }

    /**
     * @param float $KinderAlimentatieBedrag
     * @return static
     */
    public function withKinderAlimentatieBedrag(float $KinderAlimentatieBedrag) : static
    {
        $new = clone $this;
        $new->KinderAlimentatieBedrag = $KinderAlimentatieBedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getPartnerAlimentatieBedrag() : float
    {
        return $this->PartnerAlimentatieBedrag;
    }

    /**
     * @param float $PartnerAlimentatieBedrag
     * @return static
     */
    public function withPartnerAlimentatieBedrag(float $PartnerAlimentatieBedrag) : static
    {
        $new = clone $this;
        $new->PartnerAlimentatieBedrag = $PartnerAlimentatieBedrag;

        return $new;
    }

    /**
     * @return string
     */
    public function getOverigUitgaven() : string
    {
        return $this->OverigUitgaven;
    }

    /**
     * @param string $OverigUitgaven
     * @return static
     */
    public function withOverigUitgaven(string $OverigUitgaven) : static
    {
        $new = clone $this;
        $new->OverigUitgaven = $OverigUitgaven;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichting() : string
    {
        return $this->Toelichting;
    }

    /**
     * @param string $Toelichting
     * @return static
     */
    public function withToelichting(string $Toelichting) : static
    {
        $new = clone $this;
        $new->Toelichting = $Toelichting;

        return $new;
    }
}

