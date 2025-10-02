<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TTraject implements RequestInterface
{
    /**
     * @var int
     */
    private int $UniekTrajectNummer;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort $TrajectSoort;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Startdatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $StartMedewerker;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Einddatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $EindMedewerker;

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
     * Constructor
     *
     * @param int $UniekTrajectNummer
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort $TrajectSoort
     * @param \DateTimeInterface $Startdatum
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $StartMedewerker
     * @param \DateTimeInterface $Einddatum
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $EindMedewerker
     * @param bool $Lopend
     * @param int $Contractvolgnummer
     * @param string $ContractVolgnummerSoort
     */
    public function __construct(int $UniekTrajectNummer, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort $TrajectSoort, \DateTimeInterface $Startdatum, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $StartMedewerker, \DateTimeInterface $Einddatum, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $EindMedewerker, bool $Lopend, int $Contractvolgnummer, string $ContractVolgnummerSoort)
    {
        $this->UniekTrajectNummer = $UniekTrajectNummer;
        $this->TrajectSoort = $TrajectSoort;
        $this->Startdatum = $Startdatum;
        $this->StartMedewerker = $StartMedewerker;
        $this->Einddatum = $Einddatum;
        $this->EindMedewerker = $EindMedewerker;
        $this->Lopend = $Lopend;
        $this->Contractvolgnummer = $Contractvolgnummer;
        $this->ContractVolgnummerSoort = $ContractVolgnummerSoort;
    }

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort
     */
    public function getTrajectSoort() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort
    {
        return $this->TrajectSoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort $TrajectSoort
     * @return static
     */
    public function withTrajectSoort(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort $TrajectSoort) : static
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    public function getStartMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
    {
        return $this->StartMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $StartMedewerker
     * @return static
     */
    public function withStartMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $StartMedewerker) : static
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    public function getEindMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
    {
        return $this->EindMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $EindMedewerker
     * @return static
     */
    public function withEindMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $EindMedewerker) : static
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

