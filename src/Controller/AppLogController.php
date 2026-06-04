<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SearchLogFormType;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\ActionEventRepository;
use Knp\Component\Pager\PaginatorInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
class AppLogController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route(path: '/app/log/')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')"))]
    public function index(Request $request, ActionEventRepository $actionEventRepository, PaginatorInterface $paginator): Response
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

         /** @var ActionEvent[] $logs */
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
