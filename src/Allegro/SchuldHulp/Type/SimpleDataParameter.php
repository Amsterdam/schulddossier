<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataParameter implements RequestInterface
{

    /**
     * @var string
     */
    private $DataType;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Value;

    /**
     * Constructor
     *
     * @var string $DataType
     * @var string $Name
     * @var string $Value
     */
    public function __construct($DataType, $Name, $Value)
    {
        $this->DataType = $DataType;
        $this->Name = $Name;
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
        return $this->DataType;
    }

    /**
     * @param string $DataType
     * @return SimpleDataParameter
     */
    public function withDataType($DataType)
    {
        $new = clone $this;
        $new->DataType = $DataType;

        return $new;
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
     * @return SimpleDataParameter
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return SimpleDataParameter
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }


}

