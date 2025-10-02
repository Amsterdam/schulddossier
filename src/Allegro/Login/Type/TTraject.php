<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TTraject
{
    /**
     * @var int
     */
    private int $UniekTrajectNummer;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort $TrajectSoort;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Startdatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $StartMedewerker;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Einddatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $EindMedewerker;

    /**
     * @var bool
     */
    private bool $Lopend;

    /**
     * @var int
     */
    private int $Contractvolgnummer;

    /**
     * @var string
     */
    private string $ContractVolgnummerSoort;

    /**
     * @return int
     */
    public function getUniekTrajectNummer() : int
    {
        return $this->UniekTrajectNummer;
    }

    /**
     * @param int $UniekTrajectNummer
     * @return static
     */
    public function withUniekTrajectNummer(int $UniekTrajectNummer) : static
    {
        $new = clone $this;
        $new->UniekTrajectNummer = $UniekTrajectNummer;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort
     */
    public function getTrajectSoort() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort
    {
        return $this->TrajectSoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort $TrajectSoort
     * @return static
     */
    public function withTrajectSoort(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort $TrajectSoort) : static
    {
        $new = clone $this;
        $new->TrajectSoort = $TrajectSoort;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatum() : \DateTimeInterface
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return static
     */
    public function withStartdatum(\DateTimeInterface $Startdatum) : static
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getStartMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->StartMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $StartMedewerker
     * @return static
     */
    public function withStartMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $StartMedewerker) : static
    {
        $new = clone $this;
        $new->StartMedewerker = $StartMedewerker;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEinddatum() : \DateTimeInterface
    {
        return $this->Einddatum;
    }

    /**
     * @param \DateTimeInterface $Einddatum
     * @return static
     */
    public function withEinddatum(\DateTimeInterface $Einddatum) : static
    {
        $new = clone $this;
        $new->Einddatum = $Einddatum;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getEindMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->EindMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $EindMedewerker
     * @return static
     */
    public function withEindMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $EindMedewerker) : static
    {
        $new = clone $this;
        $new->EindMedewerker = $EindMedewerker;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLopend() : bool
    {
        return $this->Lopend;
    }

    /**
     * @param bool $Lopend
     * @return static
     */
    public function withLopend(bool $Lopend) : static
    {
        $new = clone $this;
        $new->Lopend = $Lopend;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractvolgnummer() : int
    {
        return $this->Contractvolgnummer;
    }

    /**
     * @param int $Contractvolgnummer
     * @return static
     */
    public function withContractvolgnummer(int $Contractvolgnummer) : static
    {
        $new = clone $this;
        $new->Contractvolgnummer = $Contractvolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractVolgnummerSoort() : string
    {
        return $this->ContractVolgnummerSoort;
    }

    /**
     * @param string $ContractVolgnummerSoort
     * @return static
     */
    public function withContractVolgnummerSoort(string $ContractVolgnummerSoort) : static
    {
        $new = clone $this;
        $new->ContractVolgnummerSoort = $ContractVolgnummerSoort;

        return $new;
    }
}

