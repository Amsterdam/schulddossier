<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class KindArray implements RequestInterface
{

    /**
     * @var TKind
     */
    private $TKind;

    /**
     * Constructor
     *
     * @var TKind $TKind
     */
    public function __construct($TKind)
    {
        $this->TKind = $TKind;
    }

    /**
     * @return TKind
     */
    public function getTKind()
    {
        return $this->TKind;
    }

    /**
     * @param TKind $TKind
     * @return KindArray
     */
    public function withTKind($TKind)
    {
        $new = clone $this;
        $new->TKind = $TKind;

        return $new;
    }


}

