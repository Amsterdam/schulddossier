<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TTeam implements RequestInterface
{
    /**
     * @var string
     */
    private $Team;

    /**
     * @var int
     */
    private $Code;

    /**
     * @var bool
     */
    private $Standaard;

    /**
     * Constructor
     *
     * @var string $Team
     * @var int $Code
     * @var bool $Standaard
     */
    public function __construct($Team, $Code, $Standaard)
    {
        $this->Team = $Team;
        $this->Code = $Code;
        $this->Standaard = $Standaard;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
        return $this->Team;
    }

    /**
     * @param string $Team
     * @return TTeam
     */
    public function withTeam($Team)
    {
        $new = clone $this;
        $new->Team = $Team;

        return $new;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return TTeam
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStandaard()
    {
        return $this->Standaard;
    }

    /**
     * @param bool $Standaard
     * @return TTeam
     */
    public function withStandaard($Standaard)
    {
        $new = clone $this;
        $new->Standaard = $Standaard;

        return $new;
    }
}
