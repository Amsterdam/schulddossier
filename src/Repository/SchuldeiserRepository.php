<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class SchuldeiserRepository extends EntityRepository
{
    public function search($q = '', $page = 0, $pageSize = 100)
    {
        $q = explode(' ', $q);
        $q = array_filter($q, function ($item) {
                return !empty($item);
            });
        if (count($q) === 0) {
            $q = [''];
        }
        $q = array_map(function ($item) {
                return strtolower($item);
            }, $q);
        $q = array_values($q);

        $qb = $this->createQueryBuilder('schuldeiser');
        $andX = $qb->expr()->andX();
        foreach ($q as $i => $item) {
            $orX = $qb->expr()->orX();
            $orX->add('LOWER(schuldeiser.bedrijfsnaam) LIKE :bedrijfsnaam_' . $i);
            $qb->setParameter('bedrijfsnaam_' . $i, '%' . $item . '%');
            $orX->add('LOWER(schuldeiser.allegroCode) LIKE :allegroCode_' . $i);
            $qb->setParameter('allegroCode_' . $i, '%' . $item . '%');
            $orX->add('LOWER(schuldeiser.straat) LIKE :straat_' . $i);
            $qb->setParameter('straat_' . $i, '%' . $item . '%');
            $orX->add('LOWER(schuldeiser.huisnummer) LIKE :huisnummer_' . $i);
            $qb->setParameter('huisnummer_' . $i, '%' . $item . '%');
            $orX->add('LOWER(schuldeiser.rekening) LIKE :rekening_' . $i);
            $qb->setParameter('rekening_' . $i, '%' . $item . '%');
            $orX->add('LOWER(schuldeiser.postcode) LIKE :postcode_' . $i);
            $qb->setParameter('postcode_' . $i, '%' . $item . '%');
            $orX->add('LOWER(schuldeiser.plaats) LIKE :plaats_' . $i);
            $qb->setParameter('plaats_' . $i, '%' . $item . '%');
            $andX->add($orX);
        }
        $qb->andWhere($andX);

        if ($pageSize > -1) {
            $qb->setFirstResult($page * $pageSize);
            $qb->setMaxResults($pageSize);
        }

        return new Paginator($qb->getQuery());
    }
}