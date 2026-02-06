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


/**
 * @Route("/app/log")
 * @Security("is_granted('ROLE_USER')")
 */
class AppLogController extends AbstractController
{
    /**
     * @Route("/")
     * @Security("is_granted('ROLE_GKA_APPBEHEERDER') || is_granted('ROLE_ADMIN')")
     */
    public function indexAction(Request $request, ActionEventRepository $actionEventRepository)
    {
        $form = $this->createForm(SearchLogFormType::class);
        $form->handleRequest($request);

        // Initialize filters
        $filters = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Add filters based on form data
            if (!empty($data['gebruiker'])) {
                $filters['gebruiker'] = $data['gebruiker'];
            }
            if (!empty($data['logType'])) {
                $filters['logType'] = $data['logType'];
            }
        }

        $logs = $actionEventRepository->findByFilters($filters);

        return $this->render('Log/index.html.twig', [
            'form' => $form->createView(),
            'logs' => $logs
        ]);
    }
}
