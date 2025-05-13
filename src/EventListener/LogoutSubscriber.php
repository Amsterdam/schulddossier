<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class LogoutSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private string $url,

        private UrlGeneratorInterface $urlGenerator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [LogoutEvent::class => 'onLogout'];
    }


    public function onLogout(LogoutEvent $event): void
    {
        // get the current request
        $request = $event->getRequest();

        $url = $this->url .
            '?' .
            $this->buildQueryString($request);

        $request->getSession()->invalidate();

        $event->setResponse(new RedirectResponse($url));
    }


    /**
     * @param LogoutEvent $logoutEvent
     * @return void
     */
    public function onSymfonyComponentSecurityHttpEventLogoutEvent(LogoutEvent $logoutEvent): void
    {
        $url = $this->url .
            '?' .
            $this->buildQueryString($logoutEvent->getRequest());

        $logoutEvent->setResponse(new RedirectResponse($url));
    }

    /**
     * Create the correct query string for keycloak
     *
     * @param Request $request
     * @return string
     */
    private function buildQueryString(Request $request): string
    {
        $redirectUrl = $this->urlGenerator->generate(
            'gemeenteamsterdam_fixxxschuldhulp_default_index',
            [],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        return http_build_query([
            'post_logout_redirect_uri' => $redirectUrl,
            'id_token_hint' => $request->getSession()->get('id_token') ?? 'test'
        ]);
    }
}
