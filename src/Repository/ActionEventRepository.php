<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityRepository;

class ActionEventRepository extends EntityRepository
{

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
}

