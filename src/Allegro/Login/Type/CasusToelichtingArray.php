<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusToelichtingArray implements RequestInterface
{

    /**
     * @var TCasusToelichting
     */
    private $TCasusToelichting;

    /**
     * Constructor
     *
     * @var TCasusToelichting $TCasusToelichting
     */
    public function __construct($TCasusToelichting)
    {
        $this->TCasusToelichting = $TCasusToelichting;
    }

    /**
     * @return TCasusToelichting
     */
    public function getTCasusToelichting()
    {
        return $this->TCasusToelichting;
    }

    /**
     * @param TCasusToelichting $TCasusToelichting
     * @return CasusToelichtingArray
     */
    public function withTCasusToelichting($TCasusToelichting)
    {
        $new = clone $this;
        $new->TCasusToelichting = $TCasusToelichting;

        return $new;
    }


}

