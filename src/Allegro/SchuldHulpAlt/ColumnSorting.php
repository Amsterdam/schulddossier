<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class ColumnSorting
{

    /**
     * @var string $FieldName
     */
    protected $FieldName = null;

    /**
     * @var ColumnSortDirection $SortDirection
     */
    protected $SortDirection = null;

    /**
     * @param string $FieldName
     * @param ColumnSortDirection $SortDirection
     */
    public function __construct($FieldName, $SortDirection)
    {
      $this->FieldName = $FieldName;
      $this->SortDirection = $SortDirection;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->FieldName;
    }

    /**
     * @param string $FieldName
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\ColumnSorting
     */
    public function setFieldName($FieldName)
    {
      $this->FieldName = $FieldName;
      return $this;
    }

    /**
     * @return ColumnSortDirection
     */
    public function getSortDirection()
    {
      return $this->SortDirection;
    }

    /**
     * @param ColumnSortDirection $SortDirection
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\ColumnSorting
     */
    public function setSortDirection($SortDirection)
    {
      $this->SortDirection = $SortDirection;
      return $this;
    }

}
