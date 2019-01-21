<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Router;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

class LogoutSuccessHandler implements LogoutSuccessHandlerInterface
{

    /**
     * @var Router
     */
    private $router;
    /**
     * @var string
     */
    private $url;

    public function __construct(string $url, RouterInterface $router)
    {
        $this->router = $router;
        $this->url = $url;
    }

    /**
     * Creates a Response object to send upon a successful logout.
     *
     * @param Request $request
     *
     * @return Response never null
     */
    public function onLogoutSuccess(Request $request)
    {
        return new RedirectResponse($this->url . '?redirect_uri=' . urlencode($this->router->generate('gemeenteamsterdam_fixxxschuldhulp_default_index', [], UrlGeneratorInterface::ABSOLUTE_URL)));
    }
}
