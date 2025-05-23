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
     * @var StringArray
     */
    private $DynamicSelectFieldNames;

    /**
     * @var ColumnSorting
     */
    private $Sorting;

    /**
     * Constructor
     *
     * @var mixed $WhereClause
     * @var StringArray $DynamicSelectFieldNames
     * @var ColumnSorting $Sorting
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
     * @return StringArray
     */
    public function getDynamicSelectFieldNames()
    {
        return $this->DynamicSelectFieldNames;
    }

    /**
     * @param StringArray $DynamicSelectFieldNames
     * @return TableRequestInfoV5
     */
    public function withDynamicSelectFieldNames($DynamicSelectFieldNames)
    {
        $new = clone $this;
        $new->DynamicSelectFieldNames = $DynamicSelectFieldNames;

        return $new;
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
     * @return TableRequestInfoV5
     */
    public function withSorting($Sorting)
    {
        $new = clone $this;
        $new->Sorting = $Sorting;

        return $new;
    }


}

