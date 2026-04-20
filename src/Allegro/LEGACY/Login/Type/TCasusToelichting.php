<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusToelichting implements RequestInterface
{
    /**
     * @var int
     */
    private $VolgnummerCasus;

    /**
     * @var int
     */
    private $Titel;

    /**
     * @var string
     */
    private $TitelTitel;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var \DateTimeInterface
     */
    private $Datum;

    /**
     * @var int
     */
    private $SubTitel;

    /**
     * @var string
     */
    private $SubTitelTitel;

    /**
     * @var string
     */
    private $Tekst;

    /**
     * Constructor
     *
     * @var int $VolgnummerCasus
     * @var int $Titel
     * @var string $TitelTitel
     * @var string $Medewerker
     * @var \DateTimeInterface $Datum
     * @var int $SubTitel
     * @var string $SubTitelTitel
     * @var string $Tekst
     */
    public function __construct($VolgnummerCasus, $Titel, $TitelTitel, $Medewerker, $Datum, $SubTitel, $SubTitelTitel, $Tekst)
    {
        $this->VolgnummerCasus = $VolgnummerCasus;
        $this->Titel = $Titel;
        $this->TitelTitel = $TitelTitel;
        $this->Medewerker = $Medewerker;
        $this->Datum = $Datum;
        $this->SubTitel = $SubTitel;
        $this->SubTitelTitel = $SubTitelTitel;
        $this->Tekst = $Tekst;
    }

    /**
     * @return int
     */
    public function getVolgnummerCasus()
    {
        return $this->VolgnummerCasus;
    }

    /**
     * @param int $VolgnummerCasus
     * @return TCasusToelichting
     */
    public function withVolgnummerCasus($VolgnummerCasus)
    {
        $new = clone $this;
        $new->VolgnummerCasus = $VolgnummerCasus;

        return $new;
    }

    /**
     * @return int
     */
    public function getTitel()
    {
        return $this->Titel;
    }

    /**
     * @param int $Titel
     * @return TCasusToelichting
     */
    public function withTitel($Titel)
    {
        $new = clone $this;
        $new->Titel = $Titel;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitelTitel()
    {
        return $this->TitelTitel;
    }

    /**
     * @param string $TitelTitel
     * @return TCasusToelichting
     */
    public function withTitelTitel($TitelTitel)
    {
        $new = clone $this;
        $new->TitelTitel = $TitelTitel;

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
     * @return TCasusToelichting
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

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
     * @return TCasusToelichting
     */
    public function withDatum($Datum)
    {
        $new = clone $this;
        $new->Datum = $Datum;

        return $new;
    }

    /**
     * @return int
     */
    public function getSubTitel()
    {
        return $this->SubTitel;
    }

    /**
     * @param int $SubTitel
     * @return TCasusToelichting
     */
    public function withSubTitel($SubTitel)
    {
        $new = clone $this;
        $new->SubTitel = $SubTitel;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubTitelTitel()
    {
        return $this->SubTitelTitel;
    }

    /**
     * @param string $SubTitelTitel
     * @return TCasusToelichting
     */
    public function withSubTitelTitel($SubTitelTitel)
    {
        $new = clone $this;
        $new->SubTitelTitel = $SubTitelTitel;

        return $new;
    }

    /**
     * @return string
     */
    public function getTekst()
    {
        return $this->Tekst;
    }

    /**
     * @param string $Tekst
     * @return TCasusToelichting
     */
    public function withTekst($Tekst)
    {
        $new = clone $this;
        $new->Tekst = $Tekst;

        return $new;
    }
}
