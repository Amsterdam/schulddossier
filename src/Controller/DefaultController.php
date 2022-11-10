<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
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
     * @Security("is_granted('ROLE_USER')")
     */
    public function appRedirectAction(Request $request)
    {
        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }
    
    /**
     * @Route("/app/debug")
     * @Security("is_granted('ROLE_USER')")
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
