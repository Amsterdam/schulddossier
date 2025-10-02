<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TTeam implements RequestInterface
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
     * Constructor
     *
     * @param string $Team
     * @param int $Code
     * @param bool $Standaard
     */
    public function __construct(string $Team, int $Code, bool $Standaard)
    {
        $this->Team = $Team;
        $this->Code = $Code;
        $this->Standaard = $Standaard;
    }

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

