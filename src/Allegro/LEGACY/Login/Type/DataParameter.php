<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DataParameter implements RequestInterface
{
    /**
     * @var string
     */
    private $Name;

    /**
     * @var mixed
     */
    private $Value;

    /**
     * Constructor
     *
     * @var string $Name
     * @var mixed $Value
     */
    public function __construct($Name, $Value)
    {
        $this->Name = $Name;
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return DataParameter
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param mixed $Value
     * @return DataParameter
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
