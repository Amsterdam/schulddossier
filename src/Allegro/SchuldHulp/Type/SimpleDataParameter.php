<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataParameter implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType $DataType;

    /**
     * @var string
     */
    private string $Name;

    /**
     * @var string
     */
    private string $Value;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType $DataType
     * @param string $Name
     * @param string $Value
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType $DataType, string $Name, string $Value)
    {
        $this->DataType = $DataType;
        $this->Name = $Name;
        $this->Value = $Value;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType
     */
    public function getDataType() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType
    {
        return $this->DataType;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType $DataType
     * @return static
     */
    public function withDataType(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType $DataType) : static
    {
        $new = clone $this;
        $new->DataType = $DataType;

        return $new;
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
     * @return string
     */
    public function getValue() : string
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return static
     */
    public function withValue(string $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}

