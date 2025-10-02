<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DataParameter implements RequestInterface
{
    /**
     * @var string
     */
    private string $Name;

    /**
     * @var mixed
     */
    private mixed $Value;

    /**
     * Constructor
     *
     * @param string $Name
     * @param mixed $Value
     */
    public function __construct(string $Name, mixed $Value)
    {
        $this->Name = $Name;
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return static
     */
    public function withName(string $Name) : static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getValue() : mixed
    {
        return $this->Value;
    }

    /**
     * @param mixed $Value
     * @return static
     */
    public function withValue(mixed $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}

