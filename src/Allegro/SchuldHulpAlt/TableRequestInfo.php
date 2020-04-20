<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TableRequestInfo
{

    /**
     * @var string $UserFilter
     */
    protected $UserFilter = null;

    /**
     * @var boolean $IncludeSchema
     */
    protected $IncludeSchema = null;

    /**
     * @var int $MaxRecords
     */
    protected $MaxRecords = null;

    /**
     * @var DataParameterArray $Parameters
     */
    protected $Parameters = null;

    /**
     * @param string $UserFilter
     * @param boolean $IncludeSchema
     * @param int $MaxRecords
     * @param DataParameterArray $Parameters
     */
    public function __construct($UserFilter, $IncludeSchema, $MaxRecords, $Parameters)
    {
      $this->UserFilter = $UserFilter;
      $this->IncludeSchema = $IncludeSchema;
      $this->MaxRecords = $MaxRecords;
      $this->Parameters = $Parameters;
    }

    /**
     * @return string
     */
    public function getUserFilter()
    {
      return $this->UserFilter;
    }

    /**
     * @param string $UserFilter
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfo
     */
    public function setUserFilter($UserFilter)
    {
      $this->UserFilter = $UserFilter;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfo
     */
    public function setIncludeSchema($IncludeSchema)
    {
      $this->IncludeSchema = $IncludeSchema;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfo
     */
    public function setMaxRecords($MaxRecords)
    {
      $this->MaxRecords = $MaxRecords;
      return $this;
    }

    /**
     * @return DataParameterArray
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param DataParameterArray $Parameters
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfo
     */
    public function setParameters($Parameters)
    {
      $this->Parameters = $Parameters;
      return $this;
    }

}
