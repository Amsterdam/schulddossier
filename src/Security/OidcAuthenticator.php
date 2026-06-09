<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Security;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Token;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\AuthenticatorInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Twig\Environment;

/**
 * Class OidcAuthenticator
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Security
 */
class OidcAuthenticator extends AbstractAuthenticator implements
    AuthenticatorInterface,
    AuthenticationEntryPointInterface
{
    const EXCEPTION_CODE_STATE_INVALID = 1;
    const EXCEPTION_CODE_NO_USER_FOUND = 2;
    const EXCEPTION_CODE_OIDC_CONNECT_ERROR = 3;
    const EXCEPTION_CODE_TOKEN_INVALID = 4;

    /**
     * @var GebruikerRepository
     */
    private $gebruikerRepository;

    private string $id_token;

    private Configuration $configuration;

    /**
     * OidcAuthenticator constructor.
     */
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UrlGeneratorInterface $urlGenerator,
        private CsrfTokenManagerInterface $csrfTokenManager,
        private LoggerInterface $logger,
        private Environment $twig,
        private $clientId,
        private $clientSecret,
        private $baseUrl,
        private readonly UserProviderInterface $userProvider,
        private readonly HttpClientInterface $client,
    ) {
        $this->gebruikerRepository = $this->entityManager->getRepository(Gebruiker::class);
        $this->configuration = Configuration::forUnsecuredSigner();
    }

    /**
     * @param Request $request
     *
     * @return bool|null
     */
    public function supports(Request $request): ?bool
    {
        if (
            $this->csrfTokenManager->isTokenValid(
                new CsrfToken('oidc_login', $request->query->get('state'))
            ) === false
        ) {
            $this->logger->warning(
                'OidcAuthenticator invalid state while getting credentials',
                array('receivedState' => $request->query->get('state'))
            );
            return false;
        }

        return $request->attributes->get('_route') === 'gemeenteamsterdam_fixxxschuldhulp_appdossier_index';
    }

    public function authenticate(Request $request): Passport
    {
        $state = $request->query->get('state');
        $code = $request->query->get('code');

        if ($this->csrfTokenManager->isTokenValid(new CsrfToken('oidc_login', $state)) === false) {
            $this->logger->warning(
                'OidcAuthenticator invalid state while getting credentials',
                array('receivedState' => $state)
            );
            return array(
                'state_valid' => false
            );
        }


        $response = $this->client->request(
            'POST',
            $this->baseUrl . '/protocol/openid-connect/token',
            [
                'body' => [
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                    'code' => $code,
                    'redirect_uri' => $this->urlGenerator->generate(
                        'gemeenteamsterdam_fixxxschuldhulp_appdossier_index',
                        [],
                        UrlGeneratorInterface::ABSOLUTE_URL
                    ),
                    'state' => $state,
                    'grant_type' => 'authorization_code'
                ]
            ]
        );

        try {
            $info = $response->toArray(true);
            $info['parsed_id_token'] = $this->configuration->parser()->parse($info['id_token']);
            $info['state_valid'] = true;
            // also save id_token and refresh_token to session directly on a temporary place
            // in onAuthenticationSuccess and onAuthenticationFailure we will move or drop it
            $request->getSession()->set('id_token_temp', $info['id_token']);
            $request->getSession()->set('refresh_token_temp', $info['refresh_token']);
        } catch (TransportExceptionInterface $e) {
            $this->logger->warning(
                'OidcAuthenticator IdP can not connect to token endpoint',
                array('e' => get_class($e), 'msg' => $e->getMessage())
            );
            throw $e;
        } catch (HttpExceptionInterface $e) {
            $this->logger->warning(
                'OidcAuthenticator IdP invalid response from token endpoint',
                array(
                    'e' => get_class($e),
                    'httpCode' => $e->getResponse()->getStatusCode(),
                    'info' => $e->getResponse()->getInfo()
                )
            );
            throw $e;
        } catch (DecodingExceptionInterface $e) {
            $this->logger->warning(
                'Error decoding token from OidcAuthenticator',
                array(
                    'e' => get_class($e),
                    'httpCode' => $e->getResponse()->getStatusCode(),
                    'info' => $e->getResponse()->getInfo()
                )
            );
            throw $e;
        }

        $this->logger->debug('exchange code for access token', array('code' => $code, 'response' => $info));

        $parsedIdToken = $this->configuration->parser()->parse($info['id_token']);
        $username = $this->getUsernameFromToken($parsedIdToken);

        $user = $this->userProvider->loadUserByIdentifier($username);

        $userBadge = new UserBadge($username, function ($userIdentifier) {
            return $this->userProvider->loadUserByIdentifier($userIdentifier);
        });

        $csrfTokenBadge = new CsrfTokenBadge('oidc_login', $state);


        $return = new SelfValidatingPassport(
            $userBadge,
            [$csrfTokenBadge]
        );
        return $return;
    }

    private function getUsernameFromToken(Token $token): ?string
    {
        return $token->claims()->get('preferred_username');
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $this->logger->debug('TEMP_DEBUG: authentication failure', array('exception' => $exception));

        return new Response($this->twig->render('OidcAuthenticator/failure.html.twig', [
            'e' => $exception
        ]));
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $firewallName): ?Response
    {
        $this->logger->debug('TEMP_DEBUG: authentication success', array('username' => $token->getId()));

        $gebruiker = $token->getUser();
        /**
         * @var Gebruiker $gebruiker
         */
        $current_time = new DateTime();
        $gebruiker?->setLastLogin($current_time);
        $this->entityManager->flush();

        $request->getSession()->set('id_token', $request->getSession()->get('id_token_temp'));
        $request->getSession()->set('refresh_token', $request->getSession()->get('refresh_token_temp'));

        if ($request->getSession()->has('loginReturnUrl')) {
            return new RedirectResponse($request->getSession()->get('loginReturnUrl'));
        }

        return new RedirectResponse($this->urlGenerator->generate('app_home_index'));
    }

    public function start(Request $request, ?AuthenticationException $authException = null): RedirectResponse
    {
        $request->getSession()->set('loginReturnUrl', $request->getUri());

        $csrfToken = $this->csrfTokenManager->getToken('oidc_login');

        $params = [];
        $params['client_id'] = $this->clientId;
        $params['redirect_uri'] = $this->urlGenerator->generate(
            'gemeenteamsterdam_fixxxschuldhulp_appdossier_index',
            [],
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        $params['response_type'] = 'code';
        $params['scope'] = 'profile email openid';
        $params['state'] = $csrfToken->getValue();
        return new RedirectResponse($this->baseUrl . '/protocol/openid-connect/auth?' . http_build_query($params));
    }
}
