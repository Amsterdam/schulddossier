<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TableRequestInfoV6 extends TableRequestInfo
{

    /**
     * @var string $Sql
     */
    protected $Sql = null;

    /**
     * @param string $UserFilter
     * @param boolean $IncludeSchema
     * @param int $MaxRecords
     * @param DataParameterArray $Parameters
     * @param string $Sql
     */
    public function __construct($UserFilter, $IncludeSchema, $MaxRecords, $Parameters, $Sql)
    {
      parent::__construct($UserFilter, $IncludeSchema, $MaxRecords, $Parameters);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TableRequestInfoV6
     */
    public function setSql($Sql)
    {
      $this->Sql = $Sql;
      return $this;
    }

}
