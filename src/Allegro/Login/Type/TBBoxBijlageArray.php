<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxBijlageArray implements RequestInterface
{

    /**
     * @var TBBoxBijlage
     */
    private $TBBoxBijlage;

    /**
     * Constructor
     *
     * @var TBBoxBijlage $TBBoxBijlage
     */
    public function __construct($TBBoxBijlage)
    {
        $this->TBBoxBijlage = $TBBoxBijlage;
    }

    /**
     * @return TBBoxBijlage
     */
    public function getTBBoxBijlage()
    {
        return $this->TBBoxBijlage;
    }

    /**
     * @param TBBoxBijlage $TBBoxBijlage
     * @return TBBoxBijlageArray
     */
    public function withTBBoxBijlage($TBBoxBijlage)
    {
        $new = clone $this;
        $new->TBBoxBijlage = $TBBoxBijlage;

        return $new;
    }


}

