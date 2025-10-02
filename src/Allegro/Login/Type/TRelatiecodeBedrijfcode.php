<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TRelatiecodeBedrijfcode
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $Bedrijfscode;

    /**
     * @var string
     */
    private string $Bedrijfsnaam;

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
     * @return int
     */
    public function getBedrijfscode() : int
    {
        return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return static
     */
    public function withBedrijfscode(int $Bedrijfscode) : static
    {
        $new = clone $this;
        $new->Bedrijfscode = $Bedrijfscode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBedrijfsnaam() : string
    {
        return $this->Bedrijfsnaam;
    }

    /**
     * @param string $Bedrijfsnaam
     * @return static
     */
    public function withBedrijfsnaam(string $Bedrijfsnaam) : static
    {
        $new = clone $this;
        $new->Bedrijfsnaam = $Bedrijfsnaam;

        return $new;
    }
}

