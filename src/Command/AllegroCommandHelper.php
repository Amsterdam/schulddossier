<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\OrganisatieRepository;

class AllegroCommandHelper
{
    public function __construct(
        private EntityManagerInterface $em,
    ) {
        $this->em = $em;
    }

    public function getAllegroUserFromAnyOrg(): Organisatie|null
    {
        /** @var OrganisatieRepository $organisatieRepository */
        $organisatieRepository = $this->em->getRepository(Organisatie::class);

        return $organisatieRepository->fetchAllegroUser();
    }
}
