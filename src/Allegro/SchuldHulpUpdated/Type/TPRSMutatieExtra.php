<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TPRSMutatieExtra
{
    /**
     * @var int
     */
    private $ReserveringNummer;

    /**
     * @var string
     */
    private $ReserveringOmschrijving;

    /**
     * @var string
     */
    private $NaamVerwijzing;

    /**
     * @return int
     */
    public function getReserveringNummer()
    {
        return $this->ReserveringNummer;
    }

    /**
     * @param int $ReserveringNummer
     * @return TPRSMutatieExtra
     */
    public function withReserveringNummer($ReserveringNummer)
    {
        $new = clone $this;
        $new->ReserveringNummer = $ReserveringNummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getReserveringOmschrijving()
    {
        return $this->ReserveringOmschrijving;
    }

    /**
     * @param string $ReserveringOmschrijving
     * @return TPRSMutatieExtra
     */
    public function withReserveringOmschrijving($ReserveringOmschrijving)
    {
        $new = clone $this;
        $new->ReserveringOmschrijving = $ReserveringOmschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamVerwijzing()
    {
        return $this->NaamVerwijzing;
    }

    /**
     * @param string $NaamVerwijzing
     * @return TPRSMutatieExtra
     */
    public function withNaamVerwijzing($NaamVerwijzing)
    {
        $new = clone $this;
        $new->NaamVerwijzing = $NaamVerwijzing;

        return $new;
    }
}

