<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TableRequestInfoV5
{
    /**
     * @var mixed
     */
    private mixed $WhereClause;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $DynamicSelectFieldNames;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSorting
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSorting $Sorting;

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    public function getDynamicSelectFieldNames(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
    {
        return $this->DynamicSelectFieldNames;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $DynamicSelectFieldNames
     * @return static
     */
    public function withDynamicSelectFieldNames(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $DynamicSelectFieldNames): static
    {
        $new = clone $this;
        $new->DynamicSelectFieldNames = $DynamicSelectFieldNames;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSorting
     */
    public function getSorting(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSorting
    {
        return $this->Sorting;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSorting $Sorting
     * @return static
     */
    public function withSorting(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\ColumnSorting $Sorting): static
    {
        $new = clone $this;
        $new->Sorting = $Sorting;

        return $new;
    }
}

