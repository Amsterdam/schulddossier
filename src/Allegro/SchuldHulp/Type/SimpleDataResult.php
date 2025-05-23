<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataResult implements RequestInterface
{

    /**
     * @var string
     */
    private $TableName;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray
     */
    private $FieldInfo;

    /**
     * @var StringArrayArray
     */
    private $Data;

    /**
     * Constructor
     *
     * @var string $TableName
     * @var SimpleFieldInfoArray $FieldInfo
     * @var StringArrayArray $Data
     */
    public function __construct($TableName, $FieldInfo, $Data)
    {
        $this->TableName = $TableName;
        $this->FieldInfo = $FieldInfo;
        $this->Data = $Data;
    }

    /**
     * @return string
     */
    public function getTableName()
    {
        return $this->TableName;
    }

    /**
     * @param string $TableName
     * @return SimpleDataResult
     */
    public function withTableName($TableName)
    {
        $new = clone $this;
        $new->TableName = $TableName;

        return $new;
    }

    /**
     * @return SimpleFieldInfoArray
     */
    public function getFieldInfo()
    {
        return $this->FieldInfo;
    }

    /**
     * @param SimpleFieldInfoArray $FieldInfo
     * @return SimpleDataResult
     */
    public function withFieldInfo($FieldInfo)
    {
        $new = clone $this;
        $new->FieldInfo = $FieldInfo;

        return $new;
    }

    /**
     * @return StringArrayArray
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param StringArrayArray $Data
     * @return SimpleDataResult
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

