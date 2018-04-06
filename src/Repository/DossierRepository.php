<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class DossierRepository extends EntityRepository
{
    public function findAll($page = 0, $pageSize = 100)
    {
        $qb = $this->createQueryBuilder('dossier');
        $qb->orderBy('dossier.aanmaakDatumTijd', 'DESC');
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }

    public function findActive($page = 0, $pageSize = 100)
    {
        $qb = $this->createQueryBuilder('dossier');
        $qb->orderBy('dossier.aanmaakDatumTijd', 'DESC');
        $qb->andWhere('dossier.inPrullenbak = :inPrullenbak');
        $qb->setParameter('inPrullenbak', false);
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }

    public function findInactive($page = 0, $pageSize = 100)
    {
        $qb = $this->createQueryBuilder('dossier');
        $qb->orderBy('dossier.aanmaakDatumTijd', 'DESC');
        $qb->andWhere('dossier.inPrullenbak = :inPrullenbak');
        $qb->setParameter('inPrullenbak', true);
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }

    public function search($query, $page = 0, $pageSize = 100)
    {
        $query = array_merge([
            'naam' => null,
            'status' => [],
            'schuldhulpbureau' => null,
            'medewerkerSchuldhulpbureau' => null,
            'teamGka' => null,
        ], $query);

        $query['naam'] = trim($query['naam']) === '' ? null : trim($query['naam']);

        $qb = $this->createQueryBuilder('dossier');
        $qb->orderBy('dossier.aanmaakDatumTijd', 'DESC');
        $qb->andWhere('dossier.inPrullenbak = :inPrullenbak');
        $qb->setParameter('inPrullenbak', false);
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        if ($query['naam'] !== null) {
            $qb->andWhere('LOWER(dossier.clientNaam) LIKE :naam');
            $qb->setParameter('naam', '%' . strtolower($query['naam']) . '%');
        }

        if (count($query['status']) > 0) {
            $orX = $qb->expr()->orX();
            foreach (array_values($query['status']) as $i => $status) {
                $orX->add('dossier.status = :status_' . $i);
                $qb->setParameter('status_' . $i, $status);
            }
            $qb->andWhere($orX);
        }

        if ($query['schuldhulpbureau'] !== null) {
            $qb->andWhere('dossier.schuldhulpbureau = :schuldhulpbureau');
            $qb->setParameter('schuldhulpbureau', $query['schuldhulpbureau']);
        }

        if ($query['medewerkerSchuldhulpbureau'] !== null) {
            $qb->andWhere('dossier.medewerkerSchuldhulpbureau = :medewerkerSchuldhulpbureau');
            $qb->setParameter('medewerkerSchuldhulpbureau', $query['medewerkerSchuldhulpbureau']);
        }

        if ($query['teamGka'] !== null) {
            $qb->andWhere('dossier.teamGka = :teamGka');
            $qb->setParameter('teamGka', $query['teamGka']);
        }

        return new Paginator($qb->getQuery());
    }
}