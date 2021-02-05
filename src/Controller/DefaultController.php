<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }
    
    /**
     * @Route("/app/debug")
     * @Security("has_role('ROLE_USER')")
     */
    public function debugAction(Request $request)
    {
        return new JsonResponse([
            'clientIp' => $request->getClientIp(),
            'clientIps' => $request->getClientIps(),
            'trustedProxies' => $request->getTrustedProxies(),
        ]);
    }

    /**
     * @Route("/ping")
     * @return JsonResponse
     */
    public function pingAction()
    {
        return new JsonResponse(['status'=>'OK']);
    }
}
