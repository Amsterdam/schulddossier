<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusNotitieArray implements RequestInterface
{

    /**
     * @var TCasusNotitie
     */
    private $TCasusNotitie;

    /**
     * Constructor
     *
     * @var TCasusNotitie $TCasusNotitie
     */
    public function __construct($TCasusNotitie)
    {
        $this->TCasusNotitie = $TCasusNotitie;
    }

    /**
     * @return TCasusNotitie
     */
    public function getTCasusNotitie()
    {
        return $this->TCasusNotitie;
    }

    /**
     * @param TCasusNotitie $TCasusNotitie
     * @return CasusNotitieArray
     */
    public function withTCasusNotitie($TCasusNotitie)
    {
        $new = clone $this;
        $new->TCasusNotitie = $TCasusNotitie;

        return $new;
    }


}

