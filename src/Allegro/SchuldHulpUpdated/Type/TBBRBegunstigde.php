<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TBBRBegunstigde
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
     * @var 'ReserveringOfDoorbetaling' | 'Reservering' | 'Doorbetaling'
     */
    private string $OpdrachtSoortKeuze;

    /**
     * @var bool
     */
    private bool $KeuzeReservering;

    /**
     * @var string
     */
    private string $Betaalwijze;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\RekeningnummerArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\RekeningnummerArray $Rekeningnummers;

    /**
     * @return string
     */
    public function getAchternaam(): string
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return static
     */
    public function withAchternaam(string $Achternaam): static
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels(): string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(string $Voorvoegsels): static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters(): string
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return static
     */
    public function withVoorletters(string $Voorletters): static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaatsnaamBezoekadres(): string
    {
        return $this->PlaatsnaamBezoekadres;
    }

    /**
     * @param string $PlaatsnaamBezoekadres
     * @return static
     */
    public function withPlaatsnaamBezoekadres(string $PlaatsnaamBezoekadres): static
    {
        $new = clone $this;
        $new->PlaatsnaamBezoekadres = $PlaatsnaamBezoekadres;

        return $new;
    }

    /**
     * @return int
     */
    public function getRelatiecode(): int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode): static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return 'ReserveringOfDoorbetaling' | 'Reservering' | 'Doorbetaling'
     */
    public function getOpdrachtSoortKeuze(): string
    {
        return $this->OpdrachtSoortKeuze;
    }

    /**
     * @param 'ReserveringOfDoorbetaling' | 'Reservering' | 'Doorbetaling' $OpdrachtSoortKeuze
     * @return static
     */
    public function withOpdrachtSoortKeuze(string $OpdrachtSoortKeuze): static
    {
        $new = clone $this;
        $new->OpdrachtSoortKeuze = $OpdrachtSoortKeuze;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKeuzeReservering(): bool
    {
        return $this->KeuzeReservering;
    }

    /**
     * @param bool $KeuzeReservering
     * @return static
     */
    public function withKeuzeReservering(bool $KeuzeReservering): static
    {
        $new = clone $this;
        $new->KeuzeReservering = $KeuzeReservering;

        return $new;
    }

    /**
     * @return string
     */
    public function getBetaalwijze(): string
    {
        return $this->Betaalwijze;
    }

    /**
     * @param string $Betaalwijze
     * @return static
     */
    public function withBetaalwijze(string $Betaalwijze): static
    {
        $new = clone $this;
        $new->Betaalwijze = $Betaalwijze;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\RekeningnummerArray
     */
    public function getRekeningnummers(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\RekeningnummerArray
    {
        return $this->Rekeningnummers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\RekeningnummerArray $Rekeningnummers
     * @return static
     */
    public function withRekeningnummers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\RekeningnummerArray $Rekeningnummers): static
    {
        $new = clone $this;
        $new->Rekeningnummers = $Rekeningnummers;

        return $new;
    }
}

