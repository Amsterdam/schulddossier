<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SearchLogFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\ActionEventRepository;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/app/log")
 * @Security("is_granted('ROLE_USER')")
 */
class AppLogController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/log/')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
    public function index(ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(SearchLogFormType::class);
        $form->handleRequest($request);

        $filters = [];
        $logs = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            if (!empty($data['gebruiker'])) {
                $filters['gebruiker'] = $data['gebruiker'];
            }
            if (!empty($data['logType'])) {
                $filters['logType'] = $data['logType'];
            }
        }

        $logs = $actionEventRepository->findByFilters($filters);

        $pagination = $paginator->paginate(
            $logs,
            $request->query->getInt('page', 1),
            100
        );


        return $this->render('Log/index.html.twig', [
            'form' => $form->createView(),
            'logs' => $logs,
            'pagination' => $pagination
        ]);
    }
}
