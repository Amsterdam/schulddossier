<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusNotitie implements RequestInterface
{

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var \DateTimeInterface
     */
    private $Datum;

    /**
     * @var string
     */
    private $Beschrijving;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    private $Medewerker;

    /**
     * @var bool
     */
    private $PDF;

    /**
     * Constructor
     *
     * @var int $Volgnummer
     * @var \DateTimeInterface $Datum
     * @var string $Beschrijving
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $Medewerker
     * @var bool $PDF
     */
    public function __construct($Volgnummer, $Datum, $Beschrijving, $Medewerker, $PDF)
    {
        $this->Volgnummer = $Volgnummer;
        $this->Datum = $Datum;
        $this->Beschrijving = $Beschrijving;
        $this->Medewerker = $Medewerker;
        $this->PDF = $PDF;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TCasusNotitie
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

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
     * @return TCasusNotitie
     */
    public function withDatum($Datum)
    {
        $new = clone $this;
        $new->Datum = $Datum;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeschrijving()
    {
        return $this->Beschrijving;
    }

    /**
     * @param string $Beschrijving
     * @return TCasusNotitie
     */
    public function withBeschrijving($Beschrijving)
    {
        $new = clone $this;
        $new->Beschrijving = $Beschrijving;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $Medewerker
     * @return TCasusNotitie
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPDF()
    {
        return $this->PDF;
    }

    /**
     * @param bool $PDF
     * @return TCasusNotitie
     */
    public function withPDF($PDF)
    {
        $new = clone $this;
        $new->PDF = $PDF;

        return $new;
    }


}

