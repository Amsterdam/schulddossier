<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleRequestInfo
{

    /**
     * @var string $SQL
     */
    protected $SQL = null;

    /**
     * @var string $Table
     */
    protected $Table = null;

    /**
     * @var string $Where
     */
    protected $Where = null;

    /**
     * @var SimpleDataParameterArray $Parameters
     */
    protected $Parameters = null;

    /**
     * @var int $MaxRecords
     */
    protected $MaxRecords = null;

    /**
     * @var boolean $IncludeSchema
     */
    protected $IncludeSchema = null;

    /**
     * @var boolean $SimpleMode
     */
    protected $SimpleMode = null;

    /**
     * @param string $SQL
     * @param string $Table
     * @param string $Where
     * @param SimpleDataParameterArray $Parameters
     * @param int $MaxRecords
     * @param boolean $IncludeSchema
     * @param boolean $SimpleMode
     */
    public function __construct($SQL, $Table, $Where, $Parameters, $MaxRecords, $IncludeSchema, $SimpleMode)
    {
      $this->SQL = $SQL;
      $this->Table = $Table;
      $this->Where = $Where;
      $this->Parameters = $Parameters;
      $this->MaxRecords = $MaxRecords;
      $this->IncludeSchema = $IncludeSchema;
      $this->SimpleMode = $SimpleMode;
    }

    /**
     * @return string
     */
    public function getSQL()
    {
      return $this->SQL;
    }

    /**
     * @param string $SQL
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleRequestInfo
     */
    public function setSQL($SQL)
    {
      $this->SQL = $SQL;
      return $this;
    }

    /**
     * @return string
     */
    public function getTable()
    {
      return $this->Table;
    }

    /**
     * @param string $Table
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleRequestInfo
     */
    public function setTable($Table)
    {
      $this->Table = $Table;
      return $this;
    }

    /**
     * @return string
     */
    public function getWhere()
    {
      return $this->Where;
    }

    /**
     * @param string $Where
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleRequestInfo
     */
    public function setWhere($Where)
    {
      $this->Where = $Where;
      return $this;
    }

    /**
     * @return SimpleDataParameterArray
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param SimpleDataParameterArray $Parameters
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleRequestInfo
     */
    public function setParameters($Parameters)
    {
      $this->Parameters = $Parameters;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxRecords()
    {
      return $this->MaxRecords;
    }

    /**
     * @param int $MaxRecords
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleRequestInfo
     */
    public function setMaxRecords($MaxRecords)
    {
      $this->MaxRecords = $MaxRecords;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeSchema()
    {
      return $this->IncludeSchema;
    }

    /**
     * @param boolean $IncludeSchema
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleRequestInfo
     */
    public function setIncludeSchema($IncludeSchema)
    {
      $this->IncludeSchema = $IncludeSchema;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSimpleMode()
    {
      return $this->SimpleMode;
    }

    /**
     * @param boolean $SimpleMode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SimpleRequestInfo
     */
    public function setSimpleMode($SimpleMode)
    {
      $this->SimpleMode = $SimpleMode;
      return $this;
    }

}
