<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TTrajectTaak
{
    /**
     * @var \DateTimeInterface
     */
    private $StartDatum;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var string
     */
    private $Actie;

    /**
     * @var string
     */
    private $ActieOmschrijving;

    /**
     * @var string
     */
    private $MedewerkerUitgevoerd;

    /**
     * @var \DateTimeInterface
     */
    private $DatumUitgevoerd;

    /**
     * @var string
     */
    private $AfmeldCategorie;

    /**
     * @var int
     */
    private $StapnummerTraject;

    /**
     * @var string
     */
    private $TrajectCode;

    /**
     * @var string
     */
    private $TrajectOmschrijving;

    /**
     * @return \DateTimeInterface
     */
    public function getStartDatum()
    {
        return $this->StartDatum;
    }

    /**
     * @param \DateTimeInterface $StartDatum
     * @return TTrajectTaak
     */
    public function withStartDatum($StartDatum)
    {
        $new = clone $this;
        $new->StartDatum = $StartDatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return TTrajectTaak
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getActie()
    {
        return $this->Actie;
    }

    /**
     * @param string $Actie
     * @return TTrajectTaak
     */
    public function withActie($Actie)
    {
        $new = clone $this;
        $new->Actie = $Actie;

        return $new;
    }

    /**
     * @return string
     */
    public function getActieOmschrijving()
    {
        return $this->ActieOmschrijving;
    }

    /**
     * @param string $ActieOmschrijving
     * @return TTrajectTaak
     */
    public function withActieOmschrijving($ActieOmschrijving)
    {
        $new = clone $this;
        $new->ActieOmschrijving = $ActieOmschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerkerUitgevoerd()
    {
        return $this->MedewerkerUitgevoerd;
    }

    /**
     * @param string $MedewerkerUitgevoerd
     * @return TTrajectTaak
     */
    public function withMedewerkerUitgevoerd($MedewerkerUitgevoerd)
    {
        $new = clone $this;
        $new->MedewerkerUitgevoerd = $MedewerkerUitgevoerd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumUitgevoerd()
    {
        return $this->DatumUitgevoerd;
    }

    /**
     * @param \DateTimeInterface $DatumUitgevoerd
     * @return TTrajectTaak
     */
    public function withDatumUitgevoerd($DatumUitgevoerd)
    {
        $new = clone $this;
        $new->DatumUitgevoerd = $DatumUitgevoerd;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfmeldCategorie()
    {
        return $this->AfmeldCategorie;
    }

    /**
     * @param string $AfmeldCategorie
     * @return TTrajectTaak
     */
    public function withAfmeldCategorie($AfmeldCategorie)
    {
        $new = clone $this;
        $new->AfmeldCategorie = $AfmeldCategorie;

        return $new;
    }

    /**
     * @return int
     */
    public function getStapnummerTraject()
    {
        return $this->StapnummerTraject;
    }

    /**
     * @param int $StapnummerTraject
     * @return TTrajectTaak
     */
    public function withStapnummerTraject($StapnummerTraject)
    {
        $new = clone $this;
        $new->StapnummerTraject = $StapnummerTraject;

        return $new;
    }

    /**
     * @return string
     */
    public function getTrajectCode()
    {
        return $this->TrajectCode;
    }

    /**
     * @param string $TrajectCode
     * @return TTrajectTaak
     */
    public function withTrajectCode($TrajectCode)
    {
        $new = clone $this;
        $new->TrajectCode = $TrajectCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getTrajectOmschrijving()
    {
        return $this->TrajectOmschrijving;
    }

    /**
     * @param string $TrajectOmschrijving
     * @return TTrajectTaak
     */
    public function withTrajectOmschrijving($TrajectOmschrijving)
    {
        $new = clone $this;
        $new->TrajectOmschrijving = $TrajectOmschrijving;

        return $new;
    }
}

