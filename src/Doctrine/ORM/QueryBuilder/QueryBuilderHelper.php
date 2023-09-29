<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Doctrine\ORM\QueryBuilder;

use App\Entity\Person\Person;
use Doctrine\ORM\QueryBuilder;

class QueryBuilderHelper
{
    public function applyFilterPersonRelated(QueryBuilder $qb, Person $person, int $counter)
    {
        $qb->andWhere('JSONB_ARRAY_CONTAINS(note.personUuids, :person_' . $counter . '_uuid) = TRUE');
        $qb->setParameter('person_' . $counter . '_uuid', $person->getUuid());
    }
}