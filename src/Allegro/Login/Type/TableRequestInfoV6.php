<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TableRequestInfoV6 implements RequestInterface
{
    /**
     * @var string
     */
    private $Sql;

    /**
     * Constructor
     *
     * @var string $Sql
     */
    public function __construct($Sql)
    {
        $this->Sql = $Sql;
    }

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
