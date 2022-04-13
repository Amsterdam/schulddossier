<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/app/log")
 * @Security("is_granted('ROLE_USER')")
 */
class AppLogController extends AbstractController
{
    /**
     * @Route("/")
     * @Security("is_granted('ROLE_USER')")
     */
    public function indexAction()
    {
        $logs = $this->getDoctrine()
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
