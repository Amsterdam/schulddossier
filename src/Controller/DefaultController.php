<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DefaultController extends AbstractController
{
    #[Route(path: '/')]
    public function index(): Response
    {
        return $this->render('Default/index.html.twig');
    }

    #[Route(path: '/app')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
    public function appRedirect(): RedirectResponse
    {
        return $this->redirectToRoute('gemeenteamsterdam_fixxxschuldhulp_appdossier_index');
    }

    #[Route(path: '/app/debug')]
    #[IsGranted(attribute: new Expression("is_granted('ROLE_USER')"))]
    public function debug(Request $request): JsonResponse
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
    public function ping(): JsonResponse
    {
        return new JsonResponse(['status' => 'OK']);
    }
}
