<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;


class ActionEventRepository extends ServiceEntityRepository
{

    use DenormalizerAwareTrait;

    /**
     * class ActionEventRepository extends EntityRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry, DenormalizerInterface $denormalizer)
    {
        parent::__construct($registry, ActionEvent::class);
        $this->denormalizer = $denormalizer;
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

    public function findByFilters(array $filters): array
    {
        if (!empty($filters['gebruiker'])) {
            $username = $filters['gebruiker']->getUsername();
            return $this->findChangedGebruiker($username);
        }

        return $this->findByFiltersWithQuerryBuilder($filters);
    }

    private function findByFiltersWithQuerryBuilder(array $filters)
    {
        $qb = $this->createQueryBuilder('a');

        return $qb->orderBy('a.datumTijd', 'DESC')
            ->setMaxResults(100)
            ->getQuery()
            ->getResult();
    }

    private function findChangedGebruiker(string $username): array
    {
        $sql = "
            SELECT * 
            FROM action_event 
            WHERE name = :name
              AND data -> 'gewijzigd' -> 'gebruiker' ->> 'username' = :username
        ";

        $entityManager = $this->getEntityManager();
        $connection = $entityManager->getConnection();
        $statement = $connection->prepare($sql);
        $result = $statement->executeQuery([
            'name' => 'gebruiker_gewijzigd',
            'username' => $username,
        ]);
        $resultDatabaseEntries = $result->fetchAllAssociative();

        $actionEvents = [];
        foreach ($resultDatabaseEntries as $entry) {
            $entry['data'] = json_decode($entry['data'], true);
            $entry['datum_tijd'] = new \DateTime($entry['datum_tijd']);
            $actionEvents[] = $this->denormalizer->denormalize($entry, ActionEvent::class);
        }

        return $actionEvents;
    }
}
