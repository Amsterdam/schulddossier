<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller\React;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(attribute: new Expression("is_granted('ROLE_ADMIN')"))]
class DossierController extends AbstractController
{

    #[Route(path: '/dossiers/', name: 'react_dossier_index', methods: ['GET', 'OPTIONS'])]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        AuthorizationCheckerInterface $authChecker
    ): Response {
        /** @var $repository DossierRepository */
        $repository = $em->getRepository(Dossier::class);

        // Get query params
        $searchParam = $request->query->get('search');
        $statusParam = $request->query->get('statusFilter');
        $page = max(1, (int) $request->query->get('page', 1));
        $pageSize = max(1, (int) $request->query->get('pageSize', 10));
        $offset = ($page - 1) * $pageSize;

        // Query Builder
        $qb = $repository->createQueryBuilder('d');

        // Apply filters
        if ($searchParam) {
            $qb->andWhere('LOWER(d.clientNaam) LIKE :search OR LOWER(d.allegroNummer) LIKE :search OR LOWER(d.regasNummer) LIKE :search')
                ->setParameter('search', '%' . $searchParam . '%');
        }
        if ($statusParam) {
            $statuses = array_map('trim', explode(',', $statusParam));
            $qb->andWhere('d.status IN (:statuses)')->setParameter('statuses', $statuses);
        }

        // Apply pagination
        $qb->setFirstResult($offset)->setMaxResults($pageSize);

        // Execute query
        $result = $qb->getQuery()->getResult();

        // Get total number of items that are paginated
        $numberOfItemsQb = clone $qb;
        $numberOfItems = (int) $numberOfItemsQb->select('COUNT(d.id)')
            ->setFirstResult(null)->setMaxResults(null)
            ->getQuery()->getSingleScalarResult();

        $numberOfPages = (int) ceil($numberOfItems / $pageSize);

        // Map the data
        $dossiers = array_map(function (Dossier $dossier) {
            return [
                'aanmaakDatumTijd' => $dossier->getAanmaakDatumTijd() ? $dossier->getAanmaakDatumTijd()->format('Y-m-d H:i:s') : null,
                'allegroNummer' => $dossier->getAllegroNummer(),
                'clientNaam' => $dossier->getClientNaam(),
                'clientVoorletters' => $dossier->getClientVoorletters(),
                'id' => $dossier->getId(),
                'isInPrullenbak' => $dossier->isInPrullenbak(),
                'organisatie' => $dossier->getOrganisatie() ? $dossier->getOrganisatie()->getNaam() : null,
                'regasNummer' => $dossier->getRegasNummer(),
                'status' => $dossier->getStatus(),
            ];
        }, $result);

        return $this->render('React/Dossier/index.html.twig', [
            'dossiers' => $dossiers,
            'pagination' => [
                'page' => $page,
                'pageSize' => $pageSize,
                'numberOfItems' => $numberOfItems,
                'numberOfPages' => $numberOfPages,
            ]
        ]);
    }
}
