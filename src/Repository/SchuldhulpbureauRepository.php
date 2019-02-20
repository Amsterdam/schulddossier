<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Schuldhulpbureau|null find($id, $lockMode = null, $lockVersion = null)
 * @method Schuldhulpbureau|null findOneBy(array $criteria, array $orderBy = null)
 * @method Schuldhulpbureau[]    findAll()
 * @method Schuldhulpbureau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SchuldhulpbureauRepository extends ServiceEntityRepository
{
    /**
     * SchuldhulpbureauRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Schuldhulpbureau::class);
    }

    /**
     * @return ArrayCollection
     */
    public function getAllWithGebruikers()
    {
        return new ArrayCollection($this
            ->createQueryBuilder('schuldhulpbureau')
            ->select('schuldhulpbureau, g')
            ->innerJoin('schuldhulpbureau.gebruikers', 'g')
            ->getQuery()->getResult());
    }
}
