<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfoV5 implements RequestInterface
{
    /**
     * @var mixed
     */
    private $WhereClause;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    private $DynamicSelectFieldNames;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting
     */
    private $Sorting;

    /**
     * Constructor
     *
     * @var mixed $WhereClause
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $DynamicSelectFieldNames
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting $Sorting
     */
    public function __construct($WhereClause, $DynamicSelectFieldNames, $Sorting)
    {
        $this->WhereClause = $WhereClause;
        $this->DynamicSelectFieldNames = $DynamicSelectFieldNames;
        $this->Sorting = $Sorting;
    }

    /**
     * @return mixed
     */
    public function getWhereClause()
    {
        return $this->WhereClause;
    }

    /**
     * @param mixed $WhereClause
     * @return TableRequestInfoV5
     */
    public function withWhereClause($WhereClause)
    {
        $new = clone $this;
        $new->WhereClause = $WhereClause;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    public function getDynamicSelectFieldNames()
    {
        return $this->DynamicSelectFieldNames;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $DynamicSelectFieldNames
     * @return TableRequestInfoV5
     */
    public function withDynamicSelectFieldNames($DynamicSelectFieldNames)
    {
        $new = clone $this;
        $new->DynamicSelectFieldNames = $DynamicSelectFieldNames;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting
     */
    public function getSorting()
    {
        return $this->Sorting;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting $Sorting
     * @return TableRequestInfoV5
     */
    public function withSorting($Sorting)
    {
        $new = clone $this;
        $new->Sorting = $Sorting;

        return $new;
    }
}
