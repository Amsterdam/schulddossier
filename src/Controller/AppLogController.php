<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/app/log")
 * @Security("has_role('ROLE_USER')")
 */
class AppLogController extends Controller
{
    /**
     * @Route("/")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $logs = $this->getDoctrine()
            ->getRepository(ActionEvent::class)
            ->findBy([], ['datumTijd' => 'DESC'], 30);

        if (!$logs) {
            throw $this->createNotFoundException(
                'No logs found '
            );
        }

        return $this->render('Log/index.html.twig', ['logs' => $logs]);
    }
}
