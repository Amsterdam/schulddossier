<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataResult implements RequestInterface
{
    /**
     * @var string
     */
    private string $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray $FieldInfo;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray $Data;

    /**
     * Constructor
     *
     * @param string $TableName
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray $FieldInfo
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray $Data
     */
    public function __construct(string $TableName, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray $FieldInfo, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray $Data)
    {
        $this->TableName = $TableName;
        $this->FieldInfo = $FieldInfo;
        $this->Data = $Data;
    }

    /**
     * @return string
     */
    public function getTableName() : string
    {
        return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return static
     */
    public function withTableName(string $TableName) : static
    {
        $new = clone $this;
        $new->TableName = $TableName;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray
     */
    public function getFieldInfo() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray
    {
        return $this->FieldInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray $FieldInfo
     * @return static
     */
    public function withFieldInfo(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray $FieldInfo) : static
    {
        $new = clone $this;
        $new->FieldInfo = $FieldInfo;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray
     */
    public function getData() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray
    {
        return $this->Data;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray $Data
     * @return static
     */
    public function withData(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray $Data) : static
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }
}

