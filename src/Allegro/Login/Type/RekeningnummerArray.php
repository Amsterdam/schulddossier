<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RekeningnummerArray implements RequestInterface
{
    /**
     * @var string
     */
    private $string;

    /**
     * Constructor
     *
     * @var string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param string $string
     * @return RekeningnummerArray
     */
    public function withString($string)
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}
