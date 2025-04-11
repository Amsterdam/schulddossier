<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
class AppLogController extends AbstractController
{
    #[Route(path: '/app/log/')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
    public function index(ManagerRegistry $doctrine): Response
    {
        $logs = $doctrine
            ->getRepository(ActionEvent::class)
            ->findBy([], ['datumTijd' => 'DESC'], 100);

        if (!$logs) {
            throw $this->createNotFoundException(
                'No logs found '
            );
        }

        return $this->render('Log/index.html.twig', ['logs' => $logs]);
    }
}
