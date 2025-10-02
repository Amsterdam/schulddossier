<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleFieldInfo implements RequestInterface
{
    /**
     * @var string
     */
    private string $Name;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType $DataType;

    /**
     * @var bool
     */
    private bool $Hidden;

    /**
     * Constructor
     *
     * @param string $Name
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType $DataType
     * @param bool $Hidden
     */
    public function __construct(string $Name, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataType $DataType, bool $Hidden)
    {
        $this->Name = $Name;
        $this->DataType = $DataType;
        $this->Hidden = $Hidden;
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
     * @return bool
     */
    public function getHidden() : bool
    {
        return $this->Hidden;
    }

    /**
     * @param bool $Hidden
     * @return static
     */
    public function withHidden(bool $Hidden) : static
    {
        $new = clone $this;
        $new->Hidden = $Hidden;

        return $new;
    }
}

