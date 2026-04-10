<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TableRequestInfoV6
{
    /**
     * @var string
     */
    private $Sql;

    /**
     * @return string
     */
    public function getSql()
    {
        return $this->Sql;
    }

    /**
     * @param string $Sql
     * @return TableRequestInfoV6
     */
    public function withSql($Sql)
    {
        $new = clone $this;
        $new->Sql = $Sql;

        return $new;
    }
}

