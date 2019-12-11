<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Int64Array implements RequestInterface
{

    /**
     * @var int
     */
    private $long;

    /**
     * Constructor
     *
     * @var int $long
     */
    public function __construct($long)
    {
        $this->long = $long;
    }

    /**
     * @return int
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param int $long
     * @return Int64Array
     */
    public function withLong($long)
    {
        $new = clone $this;
        $new->long = $long;

        return $new;
    }


}

