<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class TeamRepository extends EntityRepository
{
    public function findAll($page = null, $pageSize = null)
    {
        return parent::findBy([], ['naam' => 'ASC', 'id' => 'ASC'], $pageSize, $page * $pageSize);
    }
}