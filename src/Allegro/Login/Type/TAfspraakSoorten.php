<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TAfspraakSoorten
{
    /**
     * @var string
     */
    private string $Code;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return static
     */
    public function withCode(string $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving() : string
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return static
     */
    public function withOmschrijving(string $Omschrijving) : static
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }
}

