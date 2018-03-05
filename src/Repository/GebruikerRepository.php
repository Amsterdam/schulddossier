<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class GebruikerRepository extends EntityRepository
{
    public function findAll($page = 0, $pageSize = 100)
    {
        $qb = $this->createQueryBuilder('gebruiker');
        $qb->orderBy('gebruiker.username', 'ASC');
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }
}