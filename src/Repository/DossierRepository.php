<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class DossierRepository extends EntityRepository
{
    public function findAll($page = 0, $pageSize = 100)
    {
        $qb = $this->createQueryBuilder('dossier');
        $qb->orderBy('dossier.aanmaakDatumTijd', 'DESC');
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }

    public function findActive($page = 0, $pageSize = 100)
    {
        $qb = $this->createQueryBuilder('dossier');
        $qb->orderBy('dossier.aanmaakDatumTijd', 'DESC');
        $qb->andWhere('dossier.inPrullenbak = :inPrullenbak');
        $qb->setParameter('inPrullenbak', false);
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }

    public function findInactive($page = 0, $pageSize = 100)
    {
        $qb = $this->createQueryBuilder('dossier');
        $qb->orderBy('dossier.aanmaakDatumTijd', 'DESC');
        $qb->andWhere('dossier.inPrullenbak = :inPrullenbak');
        $qb->setParameter('inPrullenbak', true);
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }
}