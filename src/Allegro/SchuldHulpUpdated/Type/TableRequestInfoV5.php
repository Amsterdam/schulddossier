<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TableRequestInfoV5
{
    /**
     * @var mixed
     */
    private mixed $WhereClause;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray $DynamicSelectFieldNames;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ColumnSorting
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ColumnSorting $Sorting;

    /**
     * @return mixed
     */
    public function getWhereClause(): mixed
    {
        return $this->WhereClause;
    }

    /**
     * @param mixed $WhereClause
     * @return static
     */
    public function withWhereClause(mixed $WhereClause): static
    {
        $new = clone $this;
        $new->WhereClause = $WhereClause;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray
     */
    public function getDynamicSelectFieldNames(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray
    {
        return $this->DynamicSelectFieldNames;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray $DynamicSelectFieldNames
     * @return static
     */
    public function withDynamicSelectFieldNames(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\StringArray $DynamicSelectFieldNames): static
    {
        $new = clone $this;
        $new->DynamicSelectFieldNames = $DynamicSelectFieldNames;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ColumnSorting
     */
    public function getSorting(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ColumnSorting
    {
        return $this->Sorting;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ColumnSorting $Sorting
     * @return static
     */
    public function withSorting(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\ColumnSorting $Sorting): static
    {
        $new = clone $this;
        $new->Sorting = $Sorting;

        return $new;
    }
}

