<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\NoResultException;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use Doctrine\Persistence\ManagerRegistry;

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
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
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

    /**
     * @return Schuldhulpbureau
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function fetchAllegroUser(): ?Schuldhulpbureau
    {
        $query = $this->_em->createQuery('SELECT s FROM ' . Schuldhulpbureau::class . ' s WHERE s.allegroUsername IS NOT NULL and s.allegroPassword IS NOT NULL');
        $query->setMaxResults(1);
        try {
            return $query->getSingleResult();
        } catch (NoResultException $e) {
            return null;
        }
    }
}
