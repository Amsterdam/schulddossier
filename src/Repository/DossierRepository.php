<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Repository;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\Tools\Pagination\Paginator;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierTimeline;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Query\Functions\Levenshtein;

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

    public function findInactive($gebruiker, $page = 0, $pageSize = 100)
    {
        $qb = $this->createQueryBuilder('dossier');
        $qb->orderBy('dossier.aanmaakDatumTijd', 'DESC');
        $qb->andWhere('dossier.inPrullenbak = :inPrullenbak');
        $qb->setParameter('inPrullenbak', true);
        if ($gebruiker->getType() === Gebruiker::TYPE_SHV) {
            $qb->andWhere('dossier.medewerkerOrganisatie = :gebruikerId');
            $qb->setParameter('gebruikerId', $gebruiker->getId());
        }
        if ($gebruiker->getType() === Gebruiker::TYPE_SHV_KEYUSER) {
            $qb->andWhere('dossier.organisatie IN (:ghbs)');
            $qb->setParameter('ghbs', $gebruiker->getOrganisaties());
        }
        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        return new Paginator($qb->getQuery());
    }

    public function findInAllegroAndWithStatus($statuses)
    {
        return $this->createQueryBuilder('d')
            ->where('d.status IN (:statuses)')
            ->andWhere('d.allegroNummer IS NOT NULL')
            ->setParameter('statuses', $statuses)
            ->getQuery()
            ->getResult();
    }

    public function search($query, $page = 0, $pageSize = 100, $orderBy = 'default')
    {
        $query = array_merge([
            'naam' => null,
            'status' => [],
            'organisaties' => null,
            'medewerkerOrganisatie' => null,
            'teamGka' => null,
        ], $query);

        $query['naam'] = trim($query['naam']) === '' ? null : trim($query['naam']);

        $qb = $this->createQueryBuilder('dossier');
        $qb->andWhere('dossier.inPrullenbak = :inPrullenbak');
        $qb->setParameter('inPrullenbak', false);

        $qb->setFirstResult($page * $pageSize);
        $qb->setMaxResults($pageSize);

        $qb->orderBy('dossier.indiendatumTijd', 'DESC');
        $qb->addOrderBy('dossier.aanmaakDatumTijd', 'DESC');

        if ($query['naam'] !== null) {
            $qb->andWhere('FULLTEXTSEARCH(dossier.clientNaam, :searchPhrase, :searchPhrase) = TRUE');
            $qb->orWhere('LEVENSHTEIN(LOWER(dossier.clientNaam), :searchPhrase) <= :tolerance');
            $qb->orWhere('dossier.allegroNummer LIKE :searchLike');
            $qb->orWhere('dossier.regasNummer LIKE :searchLike');

            $qb->setParameter('searchPhrase', $query['naam']);
            $qb->setParameter('searchLike', $query['naam'] . '%');
            $qb->setParameter('tolerance', Levenshtein::determineTolerance($query['naam']));
        }

        if (count($query['status']) > 0) {
            $orX = $qb->expr()->orX();
            foreach (array_values($query['status']) as $i => $status) {
                $orX->add('dossier.status = :status_' . $i);
                $qb->setParameter('status_' . $i, $status);
            }
            $qb->andWhere($orX);
        }

        if ($query['organisaties'] !== null && count($query['organisaties']) > 0) {
            $expr = $qb->expr()->orX();

            $organisaties = [];

            if ($query['organisaties'] instanceof Collection) {
                $organisaties = $query['organisaties']->toArray();
            } else if (is_array($query['organisaties'])) {
                $organisaties = $query['organisaties'];
            } else {
                $organisaties = [$query['organisaties']];
            }

            foreach ($organisaties as $i => $organisatie) {
                $expr->add('dossier.organisatie = :organisatie_' . $i);
                $qb->setParameter('organisatie_' . $i, $organisatie);
            }
            $qb->andWhere($expr);
        }

        if (isset($query['organisatie']) && $query['organisatie'] !== null) {
            @trigger_error('Query for organisatie is no longer supported', E_USER_DEPRECATED);
        }

        if ($query['medewerkerOrganisatie'] !== null) {
            $qb->andWhere('dossier.medewerkerOrganisatie = :medewerkerOrganisatie');
            $qb->setParameter('medewerkerOrganisatie', $query['medewerkerOrganisatie']);
        }
        if (!is_null($query['eersteKeerVerzondenAanGKA']) && $query['eersteKeerVerzondenAanGKA']) {
            $qb->andWhere('dossier.eersteKeerVerzondenAanGKA = :eersteKeerVerzondenAanGKA');
            $qb->setParameter('eersteKeerVerzondenAanGKA', $query['eersteKeerVerzondenAanGKA']);
        }

        if ($query['teamGka'] !== null) {
            $qb->andWhere('dossier.teamGka = :teamGka');
            $qb->setParameter('teamGka', $query['teamGka']);
        }

        return new Paginator($qb->getQuery());
    }
}
