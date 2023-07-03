<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityRepository;

class TeamRepository extends EntityRepository
{
    public function findAll($page = null, $pageSize = null)
    {
        return parent::findBy([], ['naam' => 'ASC', 'id' => 'ASC'], $pageSize, $page * $pageSize);
    }
}