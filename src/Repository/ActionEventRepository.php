<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;

class ActionEventRepository extends ServiceEntityRepository
{

    /**
     * class ActionEventRepository extends EntityRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActionEvent::class);
    }

    /**
     * @param string $emailGebruiker
     * @return array
     */
    public function findAllWhereDataContainsRaw(string $emailGebruiker): array
    {
        $conn = $this->getEntityManager()->getConnection();

        //TODO Should use placeholder and binding
        $sql = 'select * from action_event a where a.data::text LIKE \'%' . $emailGebruiker . '%\'';

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();

        return $resultSet->fetchAllAssociative();
    }

    public function findByFilters(array $filters)
    {
        $qb = $this->createQueryBuilder('a');

        // if (!empty($filters['user'])) {
        //     $qb->andWhere('a.user = :user')
        //         ->setParameter('user', $filters['user']);
        // }

        if (!empty($filters['logType'])) {
            $qb->andWhere('a.name = :logType')
                ->setParameter('logType', $filters['logType']);
        }

        return $qb->orderBy('a.datumTijd', 'DESC')
            ->setMaxResults(100)
            ->getQuery()
            ->getResult();
    }
}
