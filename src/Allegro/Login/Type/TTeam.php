<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TTeam
{
    /**
     * @var string
     */
    private string $Team;

    /**
     * @var int
     */
    private int $Code;

    /**
     * @var bool
     */
    private bool $Standaard;

    /**
     * @return string
     */
    public function getTeam() : string
    {
        return $this->Team;
    }

    /**
     * @param string $Team
     * @return static
     */
    public function withTeam(string $Team) : static
    {
        $new = clone $this;
        $new->Team = $Team;

        return $new;
    }

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
     * @return bool
     */
    public function getStandaard() : bool
    {
        return $this->Standaard;
    }

    /**
     * @param bool $Standaard
     * @return static
     */
    public function withStandaard(bool $Standaard) : static
    {
        $new = clone $this;
        $new->Standaard = $Standaard;

        return $new;
    }
}

