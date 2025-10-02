<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TableRequestInfoV6 extends TableRequestInfo
{
    /**
     * @var string
     */
    private string $Sql;

    /**
     * @return string
     */
    public function getSql() : string
    {
        return $this->Sql;
    }

    /**
     * @param string $Sql
     * @return static
     */
    public function withSql(string $Sql) : static
    {
        $new = clone $this;
        $new->Sql = $Sql;

        return $new;
    }
}

