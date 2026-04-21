<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDataResult implements RequestInterface
{
    /**
     * @var string
     */
    private $TableName;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray
     */
    private $FieldInfo;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray
     */
    private $Data;

    /**
     * Constructor
     *
     * @var string $TableName
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray $FieldInfo
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray $Data
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray
     */
    public function getFieldInfo()
    {
        return $this->FieldInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray $FieldInfo
     * @return SimpleDataResult
     */
    public function withFieldInfo($FieldInfo)
    {
        $new = clone $this;
        $new->FieldInfo = $FieldInfo;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray $Data
     * @return SimpleDataResult
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }
}
