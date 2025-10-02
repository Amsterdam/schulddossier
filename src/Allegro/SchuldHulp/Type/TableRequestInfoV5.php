<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfoV5 implements RequestInterface
{
    /**
     * @var mixed
     */
    private mixed $WhereClause;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $DynamicSelectFieldNames;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting $Sorting;

    /**
     * Constructor
     *
     * @param mixed $WhereClause
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $DynamicSelectFieldNames
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting $Sorting
     */
    public function __construct(mixed $WhereClause, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $DynamicSelectFieldNames, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting $Sorting)
    {
        $this->WhereClause = $WhereClause;
        $this->DynamicSelectFieldNames = $DynamicSelectFieldNames;
        $this->Sorting = $Sorting;
    }

    /**
     * @return mixed
     */
    public function getWhereClause() : mixed
    {
        return $this->WhereClause;
    }

    /**
     * @param mixed $WhereClause
     * @return static
     */
    public function withWhereClause(mixed $WhereClause) : static
    {
        $new = clone $this;
        $new->WhereClause = $WhereClause;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
     */
    public function getDynamicSelectFieldNames() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray
    {
        return $this->DynamicSelectFieldNames;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $DynamicSelectFieldNames
     * @return static
     */
    public function withDynamicSelectFieldNames(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray $DynamicSelectFieldNames) : static
    {
        $new = clone $this;
        $new->DynamicSelectFieldNames = $DynamicSelectFieldNames;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting
     */
    public function getSorting() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting
    {
        return $this->Sorting;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting $Sorting
     * @return static
     */
    public function withSorting(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting $Sorting) : static
    {
        $new = clone $this;
        $new->Sorting = $Sorting;

        return $new;
    }
}

