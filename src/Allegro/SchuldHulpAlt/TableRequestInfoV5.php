<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TableRequestInfoV5 extends TableRequestInfo
{

    /**
     * @var anyType $WhereClause
     */
    protected $WhereClause = null;

    /**
     * @var StringArray $DynamicSelectFieldNames
     */
    protected $DynamicSelectFieldNames = null;

    /**
     * @var ColumnSorting $Sorting
     */
    protected $Sorting = null;

    /**
     * @param string $UserFilter
     * @param boolean $IncludeSchema
     * @param int $MaxRecords
     * @param DataParameterArray $Parameters
     * @param anyType $WhereClause
     * @param StringArray $DynamicSelectFieldNames
     * @param ColumnSorting $Sorting
     */
    public function __construct($UserFilter, $IncludeSchema, $MaxRecords, $Parameters, $WhereClause, $DynamicSelectFieldNames, $Sorting)
    {
      parent::__construct($UserFilter, $IncludeSchema, $MaxRecords, $Parameters);
      $this->WhereClause = $WhereClause;
      $this->DynamicSelectFieldNames = $DynamicSelectFieldNames;
      $this->Sorting = $Sorting;
    }

    /**
     * @return anyType
     */
    public function getWhereClause()
    {
      return $this->WhereClause;
    }

    /**
     * @param anyType $WhereClause
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfoV5
     */
    public function setWhereClause($WhereClause)
    {
      $this->WhereClause = $WhereClause;
      return $this;
    }

    /**
     * @return StringArray
     */
    public function getDynamicSelectFieldNames()
    {
      return $this->DynamicSelectFieldNames;
    }

    /**
     * @param StringArray $DynamicSelectFieldNames
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfoV5
     */
    public function setDynamicSelectFieldNames($DynamicSelectFieldNames)
    {
      $this->DynamicSelectFieldNames = $DynamicSelectFieldNames;
      return $this;
    }

    /**
     * @return ColumnSorting
     */
    public function getSorting()
    {
      return $this->Sorting;
    }

    /**
     * @param ColumnSorting $Sorting
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfoV5
     */
    public function setSorting($Sorting)
    {
      $this->Sorting = $Sorting;
      return $this;
    }

}
