<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TeamArray implements RequestInterface
{

    /**
     * @var TTeam
     */
    private $TTeam;

    /**
     * Constructor
     *
     * @var TTeam $TTeam
     */
    public function __construct($TTeam)
    {
        $this->TTeam = $TTeam;
    }

    /**
     * @return TTeam
     */
    public function getTTeam()
    {
        return $this->TTeam;
    }

    /**
     * @param TTeam $TTeam
     * @return TeamArray
     */
    public function withTTeam($TTeam)
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }


}

