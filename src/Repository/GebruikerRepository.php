<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Doctrine\ORM\QueryBuilder;

/**
 * Class GebruikerRepository
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Repository
 */
class GebruikerRepository extends EntityRepository
{
    /**
     * @param int $page
     * @param int $pageSize
     *
     * @return Paginator
     */
    public function findAll($page = 0, $pageSize = 100): Paginator
    {
        $qb = $this->createQueryBuilder('gebruiker');
        $qb->orderBy('gebruiker.username', 'ASC');
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }

    /**
     * @return Doctrine\ORM\QueryBuilder
     */
    public function findAllRaw(): QueryBuilder
    {
        $qb = $this->createQueryBuilder('gebruiker');
        $qb->orderBy('gebruiker.username', 'ASC');
        return $qb;
    }

    /**
     * @param array $type
     * @param int   $page
     * @param int   $pageSize
     *
     * @return Paginator
     */
    public function findAllByType(array $type, int $page = 0, int $pageSize = 100): Paginator
    {
        $qb = $this->createQueryBuilder('gebruiker');
        $qb->andWhere('gebruiker.type IN (:type)');
        $qb->setParameter('type', $type);
        $qb->orderBy('gebruiker.username', 'ASC');
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);
        return new Paginator($qb->getQuery());
    }

    /**
     * @param array $type
     * @param array $bureaus
     * @param int   $page
     * @param int   $pageSize
     *
     * @return Paginator
     */
    public function findAllByTypeAndSchuldhulpbureau(array $type, $bureaus, int $page = 0, int $pageSize = 100): Paginator
    {
        $qb = $this->findAllByTypeAndSchuldhulpbureauRaw($type, $bureaus, $page, $pageSize);
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }

    /**
     * @param array $type
     * @param array $bureaus
     *
     * @return Doctrine\ORM\QueryBuilder
     */
    public function findAllByTypeAndSchuldhulpbureauRaw(array $type, $bureaus): QueryBuilder
    {
        $qb = $this->createQueryBuilder('gebruiker');
        $qb->andWhere('gebruiker.type IN (:type)');
        $qb->setParameter('type', $type);

        $qb->innerJoin('gebruiker.schuldhulpbureaus', 'shb');
        $qb->andWhere('shb.id IN (:shb_ids)');
        $qb->setParameter('shb_ids', $bureaus);

        $qb->orderBy('gebruiker.username', 'ASC');

        return $qb;
    }
    /**
     * @param int $schuldhulpbureauId
     *
     * @return QueryBuilder
     */
    public function findAllGebruikersBySchuldhulpbureau(int $schuldhulpbureauId): QueryBuilder
    {
        $qb = $this->createQueryBuilder('gebruiker');
        $qb->select('u', 's')
            ->from(Gebruiker::class, 'u')
            ->innerJoin('u.schuldhulpbureaus','s')
            ->where($qb->expr()->eq('s.id', ':bureau_id'))
            ->andWhere($qb->expr()->orX(
               $qb->expr()->eq('gebruiker.type', ':madi_keyuser'),
               $qb->expr()->eq('gebruiker.type', ':madi')
            ))
            ->setParameter('madi_keyuser', Gebruiker::TYPE_MADI)
            ->setParameter('madi', Gebruiker::TYPE_MADI_KEYUSER)
            ->setParameter('bureau_id', $schuldhulpbureauId)
            ->addOrderBy('gebruiker.username', 'ASC')
            ->getQuery()->getResult();
        return $qb;



//        return new ArrayCollection($this
//            ->createQueryBuilder('gebruiker')
//            ->select('u', 's')
//            ->from(Gebruiker::class, 'u')
//            ->innerJoin('u.schuldhulpbureaus','s')
//            ->where($this->expr()->eq('s.id', ':bureau_id'))
//            ->andWhere($this->expr()->orX(
//               $this->expr()->eq('gebruiker.type', ':madi_keyuser'),
//               $this->expr()->eq('gebruiker.type', ':madi')
//            ))
//            ->setParameter('madi_keyuser', Gebruiker::TYPE_MADI)
//            ->setParameter('madi', Gebruiker::TYPE_MADI_KEYUSER)
//            ->setParameter('bureau_id', $schuldhulpbureauId)
//            ->addOrderBy('gebruiker.username', 'ASC')
//            ->getQuery()->getResult());

//
//        $qb = $repository->createQueryBuilder('gebruiker');
//        $qb->select('u', 's')
//          ->from(Gebruiker::class, 'u')
//          ->innerJoin('u.schuldhulpbureaus','s')
//          ->where($qb->expr()->eq('s.id', ':bureau_id'))
//          ->andWhere($qb->expr()->orX(
//               $qb->expr()->eq('gebruiker.type', ':madi_keyuser'),
//               $qb->expr()->eq('gebruiker.type', ':madi')
//           ))
//          ->setParameter('madi_keyuser', Gebruiker::TYPE_MADI)
//          ->setParameter('madi', Gebruiker::TYPE_MADI_KEYUSER)
//          ->setParameter('bureau_id', $schuldhulpbureauId)
//          ->addOrderBy('gebruiker.username', 'ASC');
//        return $qb;
    }
}
