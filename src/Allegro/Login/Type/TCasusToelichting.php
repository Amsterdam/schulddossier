<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TCasusToelichting
{
    /**
     * @var int
     */
    private int $VolgnummerCasus;

    /**
     * @var int
     */
    private int $Titel;

    /**
     * @var string
     */
    private string $TitelTitel;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Datum;

    /**
     * @var int
     */
    private int $SubTitel;

    /**
     * @var string
     */
    private string $SubTitelTitel;

    /**
     * @var string
     */
    private string $Tekst;

    /**
     * @return int
     */
    public function getVolgnummerCasus() : int
    {
        return $this->VolgnummerCasus;
    }

    /**
     * @param int $VolgnummerCasus
     * @return static
     */
    public function withVolgnummerCasus(int $VolgnummerCasus) : static
    {
        $new = clone $this;
        $new->VolgnummerCasus = $VolgnummerCasus;

        return $new;
    }

    /**
     * @return int
     */
    public function getTitel() : int
    {
        return $this->Titel;
    }

    /**
     * @param int $Titel
     * @return static
     */
    public function withTitel(int $Titel) : static
    {
        $new = clone $this;
        $new->Titel = $Titel;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitelTitel() : string
    {
        return $this->TitelTitel;
    }

    /**
     * @param string $TitelTitel
     * @return static
     */
    public function withTitelTitel(string $TitelTitel) : static
    {
        $new = clone $this;
        $new->TitelTitel = $TitelTitel;

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
     * @return \DateTimeInterface
     */
    public function getDatum() : \DateTimeInterface
    {
        return $this->Datum;
    }

    /**
     * @param \DateTimeInterface $Datum
     * @return static
     */
    public function withDatum(\DateTimeInterface $Datum) : static
    {
        $new = clone $this;
        $new->Datum = $Datum;

        return $new;
    }

    /**
     * @return int
     */
    public function getSubTitel() : int
    {
        return $this->SubTitel;
    }

    /**
     * @param int $SubTitel
     * @return static
     */
    public function withSubTitel(int $SubTitel) : static
    {
        $new = clone $this;
        $new->SubTitel = $SubTitel;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubTitelTitel() : string
    {
        return $this->SubTitelTitel;
    }

    /**
     * @param string $SubTitelTitel
     * @return static
     */
    public function withSubTitelTitel(string $SubTitelTitel) : static
    {
        $new = clone $this;
        $new->SubTitelTitel = $SubTitelTitel;

        return $new;
    }

    /**
     * @return string
     */
    public function getTekst() : string
    {
        return $this->Tekst;
    }

    /**
     * @param string $Tekst
     * @return static
     */
    public function withTekst(string $Tekst) : static
    {
        $new = clone $this;
        $new->Tekst = $Tekst;

        return $new;
    }
}

