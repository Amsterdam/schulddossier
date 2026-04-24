<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPRSMutatieExtra
{
    /**
     * @var int
     */
    private int $ReserveringNummer;

    /**
     * @var string
     */
    private string $ReserveringOmschrijving;

    /**
     * @var string
     */
    private string $NaamVerwijzing;

    /**
     * @return int
     */
    public function getReserveringNummer(): int
    {
        return $this->ReserveringNummer;
    }

    /**
     * @param int $ReserveringNummer
     * @return static
     */
    public function withReserveringNummer(int $ReserveringNummer): static
    {
        $new = clone $this;
        $new->ReserveringNummer = $ReserveringNummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getReserveringOmschrijving(): string
    {
        return $this->ReserveringOmschrijving;
    }

    /**
     * @param string $ReserveringOmschrijving
     * @return static
     */
    public function withReserveringOmschrijving(string $ReserveringOmschrijving): static
    {
        $new = clone $this;
        $new->ReserveringOmschrijving = $ReserveringOmschrijving;

        return $new;
    }

    /**
     * @return string
     */
    public function getNaamVerwijzing(): string
    {
        return $this->NaamVerwijzing;
    }

    /**
     * @param string $NaamVerwijzing
     * @return static
     */
    public function withNaamVerwijzing(string $NaamVerwijzing): static
    {
        $new = clone $this;
        $new->NaamVerwijzing = $NaamVerwijzing;

        return $new;
    }
}

