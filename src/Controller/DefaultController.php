<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        return $this->render('Default/index.html.twig');
    }

    /**
     * @Route("/app")
     * @Security("has_role('ROLE_USER')")
     */
    public function appRedirectAction(Request $request)
    {
        if ($this->isGranted('ROLE_GKA_APPBEHEERDER')) {
            return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appgebruiker_index');
        }
        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }
}
