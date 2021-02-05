<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Doctrine\ORM\QueryBuilder;

/**
 * Class GebruikerRepository
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Repository
 */
class GebruikerRepository extends ServiceEntityRepository
{
    const INACTIVE_MODIFIER = '-3 months';

    use PaginationTrait;

    /**
     * SchuldhulpbureauRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gebruiker::class);
        $this->setPaginationAlias('g');
        $this->addPaginationLeftJoin('g.schuldhulpbureaus', 'shb');
        $this->addPaginationLeftJoin('g.teamGka', 't');
    }

    public function generatePaginationQueryForUser(Gebruiker $gebruiker, bool $inactive): Query
    {
        switch ($gebruiker->getType()) {
            case Gebruiker::TYPE_MADI_KEYUSER:
                return $this->generatePaginationQueryForKeyuser($gebruiker, $inactive);
            case Gebruiker::TYPE_GKA_APPBEHEERDER:
                return $this->generatePaginationQueryForGkaAppbeheerder($gebruiker, $inactive);
            case Gebruiker::TYPE_ADMIN:
                return $this->generatePaginationQueryForAdmin($gebruiker, $inactive);
        }
    }

    public function generatePaginationQueryForKeyuser(Gebruiker $gebruiker, $inactive): Query {
        $query =  $this->generatePaginationQuery(sprintf('%s WHERE shb.id IN (:bureaus) AND g.type IN (:types) %s', $this->generatePaginationQueryDql(), $this->generateInactiveQueryPart($inactive)));
        $query->setParameter('bureaus', $gebruiker->getSchuldhulpbureaus());
        $query->setParameter('types', [Gebruiker::TYPE_MADI, Gebruiker::TYPE_MADI_KEYUSER]);
        $lastLogin = new \DateTime();
        $lastLogin->modify(self::INACTIVE_MODIFIER);
        $query->setParameter('lastLogin', $lastLogin);

        return $query;
    }

    public function generatePaginationQueryForGkaAppbeheerder(Gebruiker $gebruiker, $inactive): Query {
        $query =  $this->generatePaginationQuery(sprintf('%s WHERE g.type IN (:types) %s', $this->generatePaginationQueryDql(), $this->generateInactiveQueryPart($inactive)));
        $query->setParameter('types', [Gebruiker::TYPE_GKA, Gebruiker::TYPE_GKA_APPBEHEERDER, Gebruiker::TYPE_MADI, Gebruiker::TYPE_MADI_KEYUSER]);
        $lastLogin = new \DateTime();
        $lastLogin->modify(self::INACTIVE_MODIFIER);
        $query->setParameter('lastLogin', $lastLogin);
        return $query;
    }

    public function generatePaginationQueryForAdmin(Gebruiker $gebruiker, $inactive): Query {
        $query =  $this->generatePaginationQuery(sprintf('%s WHERE g.type IN (:types) %s', $this->generatePaginationQueryDql(), $this->generateInactiveQueryPart($inactive)));
        $query->setParameter('types', [Gebruiker::TYPE_ADMIN, Gebruiker::TYPE_GKA, Gebruiker::TYPE_GKA_APPBEHEERDER, Gebruiker::TYPE_MADI, Gebruiker::TYPE_MADI_KEYUSER]);
        $lastLogin = new \DateTime();
        $lastLogin->modify(self::INACTIVE_MODIFIER);
        $query->setParameter('lastLogin', $lastLogin);
        return $query;
    }

    protected function generateInactiveQueryPart(bool $inactive) {
        if ($inactive) {
            return 'AND (g.lastLogin <= :lastLogin OR g.lastLogin IS NULL)';
        }

        return 'AND g.lastLogin > :lastLogin';
    }

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
     * @return QueryBuilder
     */
    public function findAllByTypeAndSchuldhulpbureauRaw(array $type, $bureaus): QueryBuilder
    {
        $qb = $this->createQueryBuilder('gebruiker');
        $qb->andWhere('gebruiker.type IN (:type)');
        $qb->setParameter('type', $type);

        $qb->innerJoin('gebruiker.schuldhulpbureaus', 'shb');
        $qb->andWhere('shb.id IN (:shb_ids)');
        $qb->setParameter('shb_ids', $bureaus);

        $qb->orderBy('gebruiker.naam', 'ASC');

        return $qb;
    }

    /**
     * @return QueryBuilder
     */
    public function findAllOnbekendeGebruikers(): QueryBuilder
    {
        $qb = $this->createQueryBuilder('gebruiker');
        $qb->andWhere('gebruiker.type = (:type)');
        $qb->setParameter('type', Gebruiker::TYPE_ONBEKEND);

        $qb->orderBy('gebruiker.naam', 'ASC');

        return $qb;
    }

    /**
     * @param int $schuldhulpbureauId
     *
     * @return Array
     */
    public function findAllGebruikersBySchuldhulpbureau(int $schuldhulpbureauId): Array
    {
            $qb = $this->createQueryBuilder('g');
            $qb->innerJoin('g.schuldhulpbureaus','s');
            $qb->where($qb->expr()->eq('s.id', ':bureau_id'));
            $qb->andWhere($qb->expr()->orX(
               $qb->expr()->eq('g.type', ':madi_keyuser'),
               $qb->expr()->eq('g.type', ':madi')
            ));
            $qb->setParameter('madi_keyuser', Gebruiker::TYPE_MADI);
            $qb->setParameter('madi', Gebruiker::TYPE_MADI_KEYUSER);
            $qb->setParameter('bureau_id', $schuldhulpbureauId);
            $qb->addOrderBy('g.username', 'ASC');
            $qb = $qb->getQuery()->getResult();
        return $qb;
    }

    /**
     * @param int $gebruikerId
     *
     * @return String
     */
    public function getGebruikerEmailById(int $gebruikerId): String
    {
        return $this->findOneBy(array('id' => $gebruikerId))->getEmail();
    }
}
