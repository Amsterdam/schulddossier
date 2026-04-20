<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleFieldInfo implements RequestInterface
{
    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $DataType;

    /**
     * @var bool
     */
    private $Hidden;

    /**
     * Constructor
     *
     * @var string $Name
     * @var string $DataType
     * @var bool $Hidden
     */
    public function __construct($Name, $DataType, $Hidden)
    {
        $this->Name = $Name;
        $this->DataType = $DataType;
        $this->Hidden = $Hidden;
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
     * @return SimpleFieldInfo
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
    public function getDataType()
    {
        return $this->DataType;
    }

    /**
     * @param string $DataType
     * @return SimpleFieldInfo
     */
    public function withDataType($DataType)
    {
        $new = clone $this;
        $new->DataType = $DataType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHidden()
    {
        return $this->Hidden;
    }

    /**
     * @param bool $Hidden
     * @return SimpleFieldInfo
     */
    public function withHidden($Hidden)
    {
        $new = clone $this;
        $new->Hidden = $Hidden;

        return $new;
    }
}
