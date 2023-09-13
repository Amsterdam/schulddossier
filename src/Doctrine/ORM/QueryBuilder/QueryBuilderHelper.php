<?php

namespace App\Doctrine\ORM\QueryBuilder;

use App\Entity\Geography\Gebied;
use App\Entity\Person\Person;
use Doctrine\ORM\QueryBuilder;

class QueryBuilderHelper
{
    /**
     * @param QueryBuilder $qb
     * @param array $gebieden
     * @return void
     */
    public function applyFilterGeography(QueryBuilder $qb, array $gebieden, int $counter)
    {
        $orX = $qb->expr()->orX();
        foreach ($gebieden as $i => $gebied) {
            /* @var $gebied Gebied */
            $orX->add('ST_DWithin(note.geoWgs84, ST_GeographyFromText(:geo_' . $counter . '_multipolygon_' . $i . '), 0) = TRUE');
            $qb->setParameter('geo_' . $counter . '_multipolygon_' . $i, $gebied->getGeografieWgs84());
        }
        $qb->andWhere($orX);
    }

    public function applyFilterPersonRelated(QueryBuilder $qb, Person $person, int $counter)
    {
        $qb->andWhere('JSONB_ARRAY_CONTAINS(note.personUuids, :person_' . $counter . '_uuid) = TRUE');
        $qb->setParameter('person_' . $counter . '_uuid', $person->getUuid());
    }
}