<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class VariantArray implements RequestInterface
{
    /**
     * @var mixed
     */
    private $anyType;

    /**
     * Constructor
     *
     * @var mixed $anyType
     */
    public function __construct($anyType)
    {
        $this->anyType = $anyType;
    }

    /**
     * @return mixed
     */
    public function getAnyType()
    {
        return $this->anyType;
    }

    /**
     * @param mixed $anyType
     * @return VariantArray
     */
    public function withAnyType($anyType)
    {
        $new = clone $this;
        $new->anyType = $anyType;

        return $new;
    }
}
