<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TBBRBegunstigde implements RequestInterface
{

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var string
     */
    private $Voorvoegsels;

    /**
     * @var string
     */
    private $Voorletters;

    /**
     * @var string
     */
    private $PlaatsnaamBezoekadres;

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var string
     */
    private $OpdrachtSoortKeuze;

    /**
     * @var bool
     */
    private $KeuzeReservering;

    /**
     * @var string
     */
    private $Betaalwijze;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray
     */
    private $Rekeningnummers;

    /**
     * Constructor
     *
     * @var string $Achternaam
     * @var string $Voorvoegsels
     * @var string $Voorletters
     * @var string $PlaatsnaamBezoekadres
     * @var int $Relatiecode
     * @var string $OpdrachtSoortKeuze
     * @var bool $KeuzeReservering
     * @var string $Betaalwijze
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray $Rekeningnummers
     */
    public function __construct($Achternaam, $Voorvoegsels, $Voorletters, $PlaatsnaamBezoekadres, $Relatiecode, $OpdrachtSoortKeuze, $KeuzeReservering, $Betaalwijze, $Rekeningnummers)
    {
        $this->Achternaam = $Achternaam;
        $this->Voorvoegsels = $Voorvoegsels;
        $this->Voorletters = $Voorletters;
        $this->PlaatsnaamBezoekadres = $PlaatsnaamBezoekadres;
        $this->Relatiecode = $Relatiecode;
        $this->OpdrachtSoortKeuze = $OpdrachtSoortKeuze;
        $this->KeuzeReservering = $KeuzeReservering;
        $this->Betaalwijze = $Betaalwijze;
        $this->Rekeningnummers = $Rekeningnummers;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return TBBRBegunstigde
     */
    public function withAchternaam($Achternaam)
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels()
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return TBBRBegunstigde
     */
    public function withVoorvoegsels($Voorvoegsels)
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters()
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return TBBRBegunstigde
     */
    public function withVoorletters($Voorletters)
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaatsnaamBezoekadres()
    {
        return $this->PlaatsnaamBezoekadres;
    }

    /**
     * @param string $PlaatsnaamBezoekadres
     * @return TBBRBegunstigde
     */
    public function withPlaatsnaamBezoekadres($PlaatsnaamBezoekadres)
    {
        $new = clone $this;
        $new->PlaatsnaamBezoekadres = $PlaatsnaamBezoekadres;

        return $new;
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return TBBRBegunstigde
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpdrachtSoortKeuze()
    {
        return $this->OpdrachtSoortKeuze;
    }

    /**
     * @param string $OpdrachtSoortKeuze
     * @return TBBRBegunstigde
     */
    public function withOpdrachtSoortKeuze($OpdrachtSoortKeuze)
    {
        $new = clone $this;
        $new->OpdrachtSoortKeuze = $OpdrachtSoortKeuze;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKeuzeReservering()
    {
        return $this->KeuzeReservering;
    }

    /**
     * @param bool $KeuzeReservering
     * @return TBBRBegunstigde
     */
    public function withKeuzeReservering($KeuzeReservering)
    {
        $new = clone $this;
        $new->KeuzeReservering = $KeuzeReservering;

        return $new;
    }

    /**
     * @return string
     */
    public function getBetaalwijze()
    {
        return $this->Betaalwijze;
    }

    /**
     * @param string $Betaalwijze
     * @return TBBRBegunstigde
     */
    public function withBetaalwijze($Betaalwijze)
    {
        $new = clone $this;
        $new->Betaalwijze = $Betaalwijze;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray
     */
    public function getRekeningnummers()
    {
        return $this->Rekeningnummers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray $Rekeningnummers
     * @return TBBRBegunstigde
     */
    public function withRekeningnummers($Rekeningnummers)
    {
        $new = clone $this;
        $new->Rekeningnummers = $Rekeningnummers;

        return $new;
    }


}

