<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route(path: '/')]
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('Default/index.html.twig');
    }

    #[Route(path: '/app')]
    #[Security("is_granted('ROLE_USER')")]
    public function appRedirect(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }
    
    #[Route(path: '/app/debug')]
    #[Security("is_granted('ROLE_USER')")]
    public function debug(Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
        return new JsonResponse([
            'clientIp' => $request->getClientIp(),
            'clientIps' => $request->getClientIps(),
            'trustedProxies' => $request->getTrustedProxies(),
        ]);
    }

    /**
     * @return JsonResponse
     */
    #[Route(path: '/ping')]
    public function ping(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        return new JsonResponse(['status'=>'OK']);
    }
}
