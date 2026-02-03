<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BooleanArray implements RequestInterface
{
    /**
     * @var bool
     */
    private $boolean;

    /**
     * Constructor
     *
     * @var bool $boolean
     */
    public function __construct($boolean)
    {
        $this->boolean = $boolean;
    }

    /**
     * @return bool
     */
    public function getBoolean()
    {
        return $this->boolean;
    }

    /**
     * @param bool $boolean
     * @return BooleanArray
     */
    public function withBoolean($boolean)
    {
        $new = clone $this;
        $new->boolean = $boolean;

        return $new;
    }
}
