<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TeamArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTeam
     */
    private $TTeam;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTeam $TTeam
     */
    public function __construct($TTeam)
    {
        $this->TTeam = $TTeam;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTeam
     */
    public function getTTeam()
    {
        return $this->TTeam;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTeam $TTeam
     * @return TeamArray
     */
    public function withTTeam($TTeam)
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }


}

