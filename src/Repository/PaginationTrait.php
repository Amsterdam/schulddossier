<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;

trait PaginationTrait
{
    private string $paginationAliases = '';
    private string $paginationJoins = '';
    private string $paginationAlias = '';

    public function generatePaginationQuery($dql = null): Query
    {
        $dql = null !== $dql ? $dql : $this->generatePaginationQueryDql();
        return $this->getEntityManager()->createQuery($dql);
    }

    public function generatePaginationQueryDql(): String
    {
        return sprintf('
            SELECT %s 
            FROM %s %s %s
        ',
            $this->paginationAlias.$this->paginationAliases,
            $this->getEntityName(),
            $this->paginationAlias,
            $this->paginationJoins);
    }

    public function setPaginationAlias(string $alias)
    {
        $this->paginationAlias = $alias;
    }

    public function addPaginationJoin(string $table, string $alias): void
    {
        $this->paginationAliases .= sprintf(', %s', $alias);
        $this->paginationJoins .= sprintf('%sJOIN %s as %s', PHP_EOL, $table, $alias);
    }

    public function addPaginationLeftJoin(string $table, string $alias): void
    {
        $this->paginationAliases .= sprintf(', %s', $alias);
        $this->paginationJoins .= sprintf('%sLEFT JOIN %s as %s', PHP_EOL, $table, $alias);
    }

    /**
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        return parent::getEntityManager();
    }

}
