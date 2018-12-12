<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\HttpFoundation\RedirectResponse;
use GuzzleHttp\Client;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use Lcobucci\JWT\Parser;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;

class OidcAuthenticator extends AbstractGuardAuthenticator
{
    /**
     * @var GebruikerRepository
     */
    private $gebruikerRepository;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    private $clientId;

    private $clientSecret;

    private $baseUrl;

    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    /**
     * @var CsrfTokenManagerInterface
     */
    private $csrfTokenManager;

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(EntityManagerInterface $em, UrlGeneratorInterface $urlGenerator, CsrfTokenManagerInterface $csrf, LoggerInterface $logger, $clientId, $clientSecret, $baseUrl)
    {
        $this->gebruikerRepository = $em->getRepository(Gebruiker::class);
        $this->entityManager = $em;

        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->baseUrl = $baseUrl;

        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrf;
        $this->logger = $logger;
    }

    public function supports(Request $request)
    {
        if ($request->query->get('state') !== $request->getSession()->getId()) {
            $this->logger->warning('OIDC login, state does not match session');
            return;
        }

        return $request->attributes->get('_route') === 'gemeenteamsterdam_fixxxschuldhulp_oidc_return';
    }

    public function getCredentials(Request $request)
    {
        return [
            'code' => $request->query->get('code'),
        ];
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if (empty($credentials['code']) === true) {
            return;
        }

        $guzzle = new Client();
        $response = $guzzle->post($this->baseUrl . '/protocol/openid-connect/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'code' => $credentials['code'],
                'redirect_uri' => $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_oidc_return', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ]]);

        $output = json_decode($response->getBody()->__toString(), true);

        // TODO check if id_token is available

        $token = (new Parser())->parse((string) $output['id_token']);

        // TODO validate token
        // https://acc.iam.amsterdam.nl/auth/realms/schulddossier/.well-known/openid-configuration
        // https://acc.iam.amsterdam.nl/auth/realms/schulddossier/protocol/openid-connect/certs

        // TODO check nonce (it looks keycloak is not sending back the nonce!)
        // https://issues.jboss.org/browse/KEYCLOAK-1272
        // https://openid.net/specs/openid-connect-core-1_0.html#NonceNotes

        // TODO validate token

        // TODO check if email is filled

        $user = $this->gebruikerRepository->findOneBy(['email' => $token->getClaim('email')]);
        if ($user === null) {
            $user = new Gebruiker();
            $user->setEmail($token->getClaim('email'));
            $user->setUsername($token->getClaim('email'));
            $user->setEnabled(true);
            $user->setClearPassword(uniqid() . sha1($token->getClaim('email') . time())); // TODO remove this when password is no longer needed
            $user->setNaam($token->getClaim('name'));
            $user->setPasswordChangedDateTime(new \DateTime());
            $user->setType(Gebruiker::TYPE_ONBEKEND);
            $this->entityManager->persist($user);
            $this->entityManager->flush($user);
        }

        return $user;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        if ($request->getSession()->has('loginReturnUrl')) {
            $response = new RedirectResponse($request->getSession()->get('loginReturnUrl'));
            $request->getSession()->remove('loginReturnUrl');
            return $response;
        }
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // TODO fix the handle of the exception
        echo $exception;
        exit('stop!');
    }

    public function start(Request $request, AuthenticationException $authException = null)
    {
        $request->getSession()->set('loginReturnUrl', $request->getUri());

        $params = [];
        $params['client_id'] = $this->clientId;
        $params['redirect_uri'] = $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_oidc_return', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $params['response_type'] = 'code';
        $params['scope'] = 'profile email openid';
        $params['state'] = $request->getSession()->getId();
        $params['nonce'] = $this->csrfTokenManager->getToken('oidc-login');
        return new RedirectResponse($this->baseUrl . '/protocol/openid-connect/auth?' . http_build_query($params));
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }

    public function supportsRememberMe()
    {
        return false;
    }

}
