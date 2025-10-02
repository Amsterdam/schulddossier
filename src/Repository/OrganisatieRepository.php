<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\NoResultException;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Organisatie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Organisatie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Organisatie[]    findAll()
 * @method Organisatie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganisatieRepository extends ServiceEntityRepository
{
    /**
     * OrganisatieRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Organisatie::class);
    }

    /**
     * @return ArrayCollection
     */
    public function getAllWithGebruikers()
    {
        return new ArrayCollection($this
            ->createQueryBuilder('organisatie')
            ->select('organisatie, g')
            ->innerJoin('organisatie.gebruikers', 'g')
            ->getQuery()->getResult());
    }

    /**
     * @return Organisatie
     * @throws NonUniqueResultException
     */
    public function fetchAllegroUser(): ?Organisatie
    {
        $query = $this->_em->createQuery('SELECT s FROM ' . Organisatie::class . ' s WHERE s.allegroUsername IS NOT NULL and s.allegroPassword IS NOT NULL');
        $query->setMaxResults(1);
        try {
            return $query->getSingleResult();
        } catch (NoResultException $e) {
            return null;
        }
    }
}
