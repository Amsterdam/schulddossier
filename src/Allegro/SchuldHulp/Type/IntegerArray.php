<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class IntegerArray implements RequestInterface
{

    /**
     * @var int
     */
    private $int;

    /**
     * Constructor
     *
     * @var int $int
     */
    public function __construct($int)
    {
        $this->int = $int;
    }

    /**
     * @return int
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * @param int $int
     * @return IntegerArray
     */
    public function withInt($int)
    {
        $new = clone $this;
        $new->int = $int;

        return $new;
    }


}

