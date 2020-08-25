<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDelta
{

    /**
     * @var string $TableName
     */
    protected $TableName = null;

    /**
     * @var StringArray $Fields
     */
    protected $Fields = null;

    /**
     * @var SimpleDeltaChangeArray $Rows
     */
    protected $Rows = null;

    /**
     * @param string $TableName
     * @param StringArray $Fields
     * @param SimpleDeltaChangeArray $Rows
     */
    public function __construct($TableName, $Fields, $Rows)
    {
      $this->TableName = $TableName;
      $this->Fields = $Fields;
      $this->Rows = $Rows;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDelta
     */
    public function setTableName($TableName)
    {
      $this->TableName = $TableName;
      return $this;
    }

    /**
     * @return StringArray
     */
    public function getFields()
    {
      return $this->Fields;
    }

    /**
     * @param StringArray $Fields
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDelta
     */
    public function setFields($Fields)
    {
      $this->Fields = $Fields;
      return $this;
    }

    /**
     * @return SimpleDeltaChangeArray
     */
    public function getRows()
    {
      return $this->Rows;
    }

    /**
     * @param SimpleDeltaChangeArray $Rows
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleDelta
     */
    public function setRows($Rows)
    {
      $this->Rows = $Rows;
      return $this;
    }

}
