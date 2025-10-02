<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TCasusNotitie
{
    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Datum;

    /**
     * @var string
     */
    private string $Beschrijving;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker;

    /**
     * @var bool
     */
    private bool $PDF;

    /**
     * @return int
     */
    public function getVolgnummer() : int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer) : static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

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
     * @return string
     */
    public function getBeschrijving() : string
    {
        return $this->Beschrijving;
    }

    /**
     * @param string $Beschrijving
     * @return static
     */
    public function withBeschrijving(string $Beschrijving) : static
    {
        $new = clone $this;
        $new->Beschrijving = $Beschrijving;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->Medewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker
     * @return static
     */
    public function withMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPDF() : bool
    {
        return $this->PDF;
    }

    /**
     * @param bool $PDF
     * @return static
     */
    public function withPDF(bool $PDF) : static
    {
        $new = clone $this;
        $new->PDF = $PDF;

        return $new;
    }
}

