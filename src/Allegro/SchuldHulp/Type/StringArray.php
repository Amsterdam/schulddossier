<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class StringArray implements RequestInterface
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
     * @return StringArray
     */
    public function withString($string)
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }


}

