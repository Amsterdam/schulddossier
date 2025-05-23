<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Persistence\ManagerRegistry;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;

class TeamRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $registry)
    {
        parent::__construct($registry, new ClassMetadata(Team::class));
    }

    public function findAll($page = null, $pageSize = null): array
    {
        return parent::findBy([], ['naam' => 'ASC', 'id' => 'ASC'], $pageSize, $page * $pageSize);
    }
}