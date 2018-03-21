<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class SchuldeiserRepository extends EntityRepository
{
    public function search($q = '', $page = 0, $pageSize = 100)
    {
        $q = explode(' ', $q);
        $q = array_filter($q, function ($item) {
                return !empty($item);
            });
        if (count($q) === 0) {
            $q = [''];
        }
        $q = array_map(function ($item) {
                return strtolower($item);
            }, $q);
        $q = array_values($q);

        $qb = $this->createQueryBuilder('schuldeiser');
        $andX = $qb->expr()->andX();
        foreach ($q as $i => $item) {
            $orX = $qb->expr()->orX();
            $orX->add('LOWER(schuldeiser.bedrijfsnaam) LIKE :bedrijfsnaam_' . $i);
            $qb->setParameter('bedrijfsnaam_' . $i, '%' . $item . '%');
            $orX->add('LOWER(schuldeiser.rekening) = :rekening_' . $i);
            $qb->setParameter('rekening_' . $i, '%' . $item . '%');
            $andX->add($orX);
        }
        $qb->andWhere($andX);

        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }
}