<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\NewsItem;

/**
 * Class NewsItemRepository
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Repository
 */
class NewsItemRepository extends ServiceEntityRepository
{
    use PaginationTrait;

    /**
     * SchuldhulpbureauRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewsItem::class);
        $this->setPaginationAlias('n');
        $this->addPaginationJoin('n.createdBy', 'c');
        $this->addPaginationLeftJoin('n.lastUpdatedBy', 'u');
    }

    public function generatePaginationQueryForGka(): Query {
        return $this->generatePaginationQuery(sprintf('%s %s', $this->generatePaginationQueryDql(), 'WHERE n.publishedAt IS NOT NULL AND n.visibleGka = true'));
    }

    public function generatePaginationQueryForMadi(): Query {
        return $this->generatePaginationQuery(sprintf('%s %s', $this->generatePaginationQueryDql(), 'WHERE n.publishedAt IS NOT NULL AND n.visibleMadi = true'));
    }

    public function findLatest(Gebruiker $gebruiker) {
        switch ($gebruiker->getType()) {
            case Gebruiker::TYPE_ADMIN:
                return $this->findLatestForAdmin($gebruiker);
                break;

            case Gebruiker::TYPE_GKA:
            case Gebruiker::TYPE_GKA_APPBEHEERDER:
                return $this->findLatestForGka($gebruiker);
                break;

            case Gebruiker::TYPE_MADI:
            case Gebruiker::TYPE_MADI_KEYUSER:
                return $this->findLatestForMadi($gebruiker);
                break;

            default:
                throw new \Exception(sprintf('News query not implemented for unknown user type: %s', $gebruiker->getType()));
        }
    }

    public function findLatestForAdmin(Gebruiker $gebruiker) {
        $dql = 'SELECT n FROM ' . NewsItem::class .' n WHERE n.publishedAt > :lastView ORDER BY n.publishedAt DESC';
        $query = $this->getEntityManager()->createQuery($dql);

        $lastView = $gebruiker->getLastNewsView();
        if (null === $lastView) {
            $lastView = new \DateTime();
            $lastView->modify('-1 month');
        }
        $query->setParameter('lastView', $lastView);

        $results = $query->getResult();
        if (0 === count($results)) {
            return null;
        }
        $item = reset($results);
        return $item;
    }

    public function findLatestForGka(Gebruiker $gebruiker) {
        $dql = 'SELECT n FROM ' . NewsItem::class .' n WHERE n.publishedAt > :lastView AND n.visibleGka = true ORDER BY n.publishedAt DESC';
        $query = $this->getEntityManager()->createQuery($dql);

        $lastView = $gebruiker->getLastNewsView();
        if (null === $lastView) {
            $lastView = new \DateTime();
            $lastView->modify('-1 month');
        }
        $query->setParameter('lastView', $lastView);

        $results = $query->getResult();
        if (0 === count($results)) {
            return null;
        }
        $item = reset($results);
        return $item;
    }

    public function findLatestForMadi(Gebruiker $gebruiker) {
        $dql = 'SELECT n FROM ' . NewsItem::class .' n WHERE n.publishedAt > :lastView AND n.visibleMadi = true ORDER BY n.publishedAt DESC';
        $query = $this->getEntityManager()->createQuery($dql);

        $lastView = $gebruiker->getLastNewsView();
        if (null === $lastView) {
            $lastView = new \DateTime();
            $lastView->modify('-1 month');
        }
        $query->setParameter('lastView', $lastView);

        $results = $query->getResult();
        if (0 === count($results)) {
            return null;
        }
        $item = reset($results);
        return $item;
    }
}
