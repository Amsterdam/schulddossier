<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TTrajectTaak implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $StartDatum;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var string
     */
    private string $Actie;

    /**
     * @var string
     */
    private string $ActieOmschrijving;

    /**
     * @var string
     */
    private string $MedewerkerUitgevoerd;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumUitgevoerd;

    /**
     * @var string
     */
    private string $AfmeldCategorie;

    /**
     * @var int
     */
    private int $StapnummerTraject;

    /**
     * @var string
     */
    private string $TrajectCode;

    /**
     * @var string
     */
    private string $TrajectOmschrijving;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $StartDatum
     * @param string $Medewerker
     * @param string $Actie
     * @param string $ActieOmschrijving
     * @param string $MedewerkerUitgevoerd
     * @param \DateTimeInterface $DatumUitgevoerd
     * @param string $AfmeldCategorie
     * @param int $StapnummerTraject
     * @param string $TrajectCode
     * @param string $TrajectOmschrijving
     */
    public function __construct(\DateTimeInterface $StartDatum, string $Medewerker, string $Actie, string $ActieOmschrijving, string $MedewerkerUitgevoerd, \DateTimeInterface $DatumUitgevoerd, string $AfmeldCategorie, int $StapnummerTraject, string $TrajectCode, string $TrajectOmschrijving)
    {
        $this->StartDatum = $StartDatum;
        $this->Medewerker = $Medewerker;
        $this->Actie = $Actie;
        $this->ActieOmschrijving = $ActieOmschrijving;
        $this->MedewerkerUitgevoerd = $MedewerkerUitgevoerd;
        $this->DatumUitgevoerd = $DatumUitgevoerd;
        $this->AfmeldCategorie = $AfmeldCategorie;
        $this->StapnummerTraject = $StapnummerTraject;
        $this->TrajectCode = $TrajectCode;
        $this->TrajectOmschrijving = $TrajectOmschrijving;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDatum() : \DateTimeInterface
    {
        return $this->StartDatum;
    }

    /**
     * @param \DateTimeInterface $StartDatum
     * @return static
     */
    public function withStartDatum(\DateTimeInterface $StartDatum) : static
    {
        $new = clone $this;
        $new->StartDatum = $StartDatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker() : string
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return static
     */
    public function withMedewerker(string $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getActie() : string
    {
        return $this->Actie;
    }

    /**
     * @param string $Actie
     * @return static
     */
    public function withActie(string $Actie) : static
    {
        $new = clone $this;
        $new->Actie = $Actie;

        return $new;
    }

    /**
     * @return string
     */
    public function getActieOmschrijving() : string
    {
        return $this->ActieOmschrijving;
    }

    /**
     * @param string $ActieOmschrijving
     * @return static
     */
    public function withActieOmschrijving(string $ActieOmschrijving) : static
    {
        $new = clone $this;
        $new->ActieOmschrijving = $ActieOmschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerkerUitgevoerd() : string
    {
        return $this->MedewerkerUitgevoerd;
    }

    /**
     * @param string $MedewerkerUitgevoerd
     * @return static
     */
    public function withMedewerkerUitgevoerd(string $MedewerkerUitgevoerd) : static
    {
        $new = clone $this;
        $new->MedewerkerUitgevoerd = $MedewerkerUitgevoerd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumUitgevoerd() : \DateTimeInterface
    {
        return $this->DatumUitgevoerd;
    }

    /**
     * @param \DateTimeInterface $DatumUitgevoerd
     * @return static
     */
    public function withDatumUitgevoerd(\DateTimeInterface $DatumUitgevoerd) : static
    {
        $new = clone $this;
        $new->DatumUitgevoerd = $DatumUitgevoerd;

        return $new;
    }

    /**
     * @return string
     */
    public function getAfmeldCategorie() : string
    {
        return $this->AfmeldCategorie;
    }

    /**
     * @param string $AfmeldCategorie
     * @return static
     */
    public function withAfmeldCategorie(string $AfmeldCategorie) : static
    {
        $new = clone $this;
        $new->AfmeldCategorie = $AfmeldCategorie;

        return $new;
    }

    /**
     * @return int
     */
    public function getStapnummerTraject() : int
    {
        return $this->StapnummerTraject;
    }

    /**
     * @param int $StapnummerTraject
     * @return static
     */
    public function withStapnummerTraject(int $StapnummerTraject) : static
    {
        $new = clone $this;
        $new->StapnummerTraject = $StapnummerTraject;

        return $new;
    }

    /**
     * @return string
     */
    public function getTrajectCode() : string
    {
        return $this->TrajectCode;
    }

    /**
     * @param string $TrajectCode
     * @return static
     */
    public function withTrajectCode(string $TrajectCode) : static
    {
        $new = clone $this;
        $new->TrajectCode = $TrajectCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getTrajectOmschrijving() : string
    {
        return $this->TrajectOmschrijving;
    }

    /**
     * @param string $TrajectOmschrijving
     * @return static
     */
    public function withTrajectOmschrijving(string $TrajectOmschrijving) : static
    {
        $new = clone $this;
        $new->TrajectOmschrijving = $TrajectOmschrijving;

        return $new;
    }
}

