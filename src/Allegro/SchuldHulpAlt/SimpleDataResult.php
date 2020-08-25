<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDataResult
{

    /**
     * @var string $TableName
     */
    protected $TableName = null;

    /**
     * @var SimpleFieldInfoArray $FieldInfo
     */
    protected $FieldInfo = null;

    /**
     * @var StringArrayArray $Data
     */
    protected $Data = null;

    /**
     * @param string $TableName
     * @param SimpleFieldInfoArray $FieldInfo
     * @param StringArrayArray $Data
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDataResult
     */
    public function setTableName($TableName)
    {
      $this->TableName = $TableName;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDataResult
     */
    public function setFieldInfo($FieldInfo)
    {
      $this->FieldInfo = $FieldInfo;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDataResult
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

}
