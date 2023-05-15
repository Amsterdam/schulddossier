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

    public function __construct(
        private readonly string          $url,
        private readonly string          $keycloakVersion,
        private readonly RouterInterface $router
    )
    {
    }

    /**
     * Creates a Response object to send upon a successful logout.
     *
     * @param Request $request
     *
     * @return RedirectResponse never null
     */
    public function onLogoutSuccess(Request $request): RedirectResponse
    {
        return new RedirectResponse(
            $this->url . '?' .
            $this->buildQueryString($request)
        );
    }


    /**
     * Create the correct query string for keycloak
     *
     * @param Request $request
     * @return string
     */
    private function buildQueryString(Request $request): string
    {
        $url = $this->router->generate('gemeenteamsterdam_fixxxschuldhulp_default_index', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $redirectUrl = urlencode($url);

        return match ($this->keycloakVersion) {
            '17' => http_build_query(['redirect_uri' => $redirectUrl]),
            default => http_build_query([
                'post_logout_redirect_uri' => $redirectUrl,
                'id_token_hint' => $request->getSession()->get('OIDC_ID_TOKEN') ?? null
            ]),
        };
    }
}
