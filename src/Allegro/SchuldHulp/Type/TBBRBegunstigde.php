<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBRBegunstigde implements RequestInterface
{
    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var string
     */
    private string $Voorvoegsels;

    /**
     * @var string
     */
    private string $Voorletters;

    /**
     * @var string
     */
    private string $PlaatsnaamBezoekadres;

    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortOpdracht
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortOpdracht $OpdrachtSoortKeuze;

    /**
     * @var bool
     */
    private bool $KeuzeReservering;

    /**
     * @var string
     */
    private string $Betaalwijze;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray $Rekeningnummers;

    /**
     * Constructor
     *
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Voorletters
     * @param string $PlaatsnaamBezoekadres
     * @param int $Relatiecode
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortOpdracht $OpdrachtSoortKeuze
     * @param bool $KeuzeReservering
     * @param string $Betaalwijze
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray $Rekeningnummers
     */
    public function __construct(string $Achternaam, string $Voorvoegsels, string $Voorletters, string $PlaatsnaamBezoekadres, int $Relatiecode, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortOpdracht $OpdrachtSoortKeuze, bool $KeuzeReservering, string $Betaalwijze, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray $Rekeningnummers)
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
    public function getAchternaam() : string
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return static
     */
    public function withAchternaam(string $Achternaam) : static
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels() : string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(string $Voorvoegsels) : static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters() : string
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return static
     */
    public function withVoorletters(string $Voorletters) : static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaatsnaamBezoekadres() : string
    {
        return $this->PlaatsnaamBezoekadres;
    }

    /**
     * @param string $PlaatsnaamBezoekadres
     * @return static
     */
    public function withPlaatsnaamBezoekadres(string $PlaatsnaamBezoekadres) : static
    {
        $new = clone $this;
        $new->PlaatsnaamBezoekadres = $PlaatsnaamBezoekadres;

        return $new;
    }

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortOpdracht
     */
    public function getOpdrachtSoortKeuze() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortOpdracht
    {
        return $this->OpdrachtSoortKeuze;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortOpdracht $OpdrachtSoortKeuze
     * @return static
     */
    public function withOpdrachtSoortKeuze(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortOpdracht $OpdrachtSoortKeuze) : static
    {
        $new = clone $this;
        $new->OpdrachtSoortKeuze = $OpdrachtSoortKeuze;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKeuzeReservering() : bool
    {
        return $this->KeuzeReservering;
    }

    /**
     * @param bool $KeuzeReservering
     * @return static
     */
    public function withKeuzeReservering(bool $KeuzeReservering) : static
    {
        $new = clone $this;
        $new->KeuzeReservering = $KeuzeReservering;

        return $new;
    }

    /**
     * @return string
     */
    public function getBetaalwijze() : string
    {
        return $this->Betaalwijze;
    }

    /**
     * @param string $Betaalwijze
     * @return static
     */
    public function withBetaalwijze(string $Betaalwijze) : static
    {
        $new = clone $this;
        $new->Betaalwijze = $Betaalwijze;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray
     */
    public function getRekeningnummers() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray
    {
        return $this->Rekeningnummers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray $Rekeningnummers
     * @return static
     */
    public function withRekeningnummers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray $Rekeningnummers) : static
    {
        $new = clone $this;
        $new->Rekeningnummers = $Rekeningnummers;

        return $new;
    }
}

