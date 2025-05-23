<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TTraject implements RequestInterface
{

    /**
     * @var int
     */
    private $UniekTrajectNummer;

    /**
     * @var TTrajectSoort
     */
    private $TrajectSoort;

    /**
     * @var DateTimeInterface
     */
    private $Startdatum;

    /**
     * @var TMedewerker
     */
    private $StartMedewerker;

    /**
     * @var DateTimeInterface
     */
    private $Einddatum;

    /**
     * @var TMedewerker
     */
    private $EindMedewerker;

    /**
     * @var bool
     */
    private $Lopend;

    /**
     * @var int
     */
    private $Contractvolgnummer;

    /**
     * @var string
     */
    private $ContractVolgnummerSoort;

    /**
     * Constructor
     *
     * @var int $UniekTrajectNummer
     * @var TTrajectSoort $TrajectSoort
     * @var DateTimeInterface $Startdatum
     * @var TMedewerker $StartMedewerker
     * @var DateTimeInterface $Einddatum
     * @var TMedewerker $EindMedewerker
     * @var bool $Lopend
     * @var int $Contractvolgnummer
     * @var string $ContractVolgnummerSoort
     */
    public function __construct($UniekTrajectNummer, $TrajectSoort, $Startdatum, $StartMedewerker, $Einddatum, $EindMedewerker, $Lopend, $Contractvolgnummer, $ContractVolgnummerSoort)
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
    public function getUniekTrajectNummer()
    {
        return $this->UniekTrajectNummer;
    }

    /**
     * @param int $UniekTrajectNummer
     * @return TTraject
     */
    public function withUniekTrajectNummer($UniekTrajectNummer)
    {
        $new = clone $this;
        $new->UniekTrajectNummer = $UniekTrajectNummer;

        return $new;
    }

    /**
     * @return TTrajectSoort
     */
    public function getTrajectSoort()
    {
        return $this->TrajectSoort;
    }

    /**
     * @param TTrajectSoort $TrajectSoort
     * @return TTraject
     */
    public function withTrajectSoort($TrajectSoort)
    {
        $new = clone $this;
        $new->TrajectSoort = $TrajectSoort;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getStartdatum()
    {
        return $this->Startdatum;
    }

    /**
     * @param DateTimeInterface $Startdatum
     * @return TTraject
     */
    public function withStartdatum($Startdatum)
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return TMedewerker
     */
    public function getStartMedewerker()
    {
        return $this->StartMedewerker;
    }

    /**
     * @param TMedewerker $StartMedewerker
     * @return TTraject
     */
    public function withStartMedewerker($StartMedewerker)
    {
        $new = clone $this;
        $new->StartMedewerker = $StartMedewerker;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getEinddatum()
    {
        return $this->Einddatum;
    }

    /**
     * @param DateTimeInterface $Einddatum
     * @return TTraject
     */
    public function withEinddatum($Einddatum)
    {
        $new = clone $this;
        $new->Einddatum = $Einddatum;

        return $new;
    }

    /**
     * @return TMedewerker
     */
    public function getEindMedewerker()
    {
        return $this->EindMedewerker;
    }

    /**
     * @param TMedewerker $EindMedewerker
     * @return TTraject
     */
    public function withEindMedewerker($EindMedewerker)
    {
        $new = clone $this;
        $new->EindMedewerker = $EindMedewerker;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLopend()
    {
        return $this->Lopend;
    }

    /**
     * @param bool $Lopend
     * @return TTraject
     */
    public function withLopend($Lopend)
    {
        $new = clone $this;
        $new->Lopend = $Lopend;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractvolgnummer()
    {
        return $this->Contractvolgnummer;
    }

    /**
     * @param int $Contractvolgnummer
     * @return TTraject
     */
    public function withContractvolgnummer($Contractvolgnummer)
    {
        $new = clone $this;
        $new->Contractvolgnummer = $Contractvolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractVolgnummerSoort()
    {
        return $this->ContractVolgnummerSoort;
    }

    /**
     * @param string $ContractVolgnummerSoort
     * @return TTraject
     */
    public function withContractVolgnummerSoort($ContractVolgnummerSoort)
    {
        $new = clone $this;
        $new->ContractVolgnummerSoort = $ContractVolgnummerSoort;

        return $new;
    }


}

