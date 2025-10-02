<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBoxBijlage
{
    /**
     * @var int
     */
    private int $Code;

    /**
     * @var int
     */
    private int $UniekVolgnummer;

    /**
     * @var mixed
     */
    private mixed $Bijlage;

    /**
     * @var int
     */
    private int $BijlageSize;

    /**
     * @var string
     */
    private string $BijlageNaam;

    /**
     * @return int
     */
    public function getCode() : int
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return static
     */
    public function withCode(int $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer() : int
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return static
     */
    public function withUniekVolgnummer(int $UniekVolgnummer) : static
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getBijlage() : mixed
    {
        return $this->Bijlage;
    }

    /**
     * @param mixed $Bijlage
     * @return static
     */
    public function withBijlage(mixed $Bijlage) : static
    {
        $new = clone $this;
        $new->Bijlage = $Bijlage;

        return $new;
    }

    /**
     * @return int
     */
    public function getBijlageSize() : int
    {
        return $this->BijlageSize;
    }

    /**
     * @param int $BijlageSize
     * @return static
     */
    public function withBijlageSize(int $BijlageSize) : static
    {
        $new = clone $this;
        $new->BijlageSize = $BijlageSize;

        return $new;
    }

    /**
     * @return string
     */
    public function getBijlageNaam() : string
    {
        return $this->BijlageNaam;
    }

    /**
     * @param string $BijlageNaam
     * @return static
     */
    public function withBijlageNaam(string $BijlageNaam) : static
    {
        $new = clone $this;
        $new->BijlageNaam = $BijlageNaam;

        return $new;
    }
}

