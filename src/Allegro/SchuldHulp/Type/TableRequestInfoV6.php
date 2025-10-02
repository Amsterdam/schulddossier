<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfoV6 implements RequestInterface
{
    /**
     * @var string
     */
    private string $Sql;

    /**
     * Constructor
     *
     * @param string $Sql
     */
    public function __construct(string $Sql)
    {
        $this->Sql = $Sql;
    }

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

