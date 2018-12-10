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
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

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

    /**
     * @var RequestStack
     */
    private $stack;

    private $clientId;

    private $clientSecret;

    private $baseUrl;

    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    public function __construct(EntityManagerInterface $em, UrlGeneratorInterface $urlGenerator, RequestStack $stack, $clientId, $clientSecret, $baseUrl)
    {
        $this->gebruikerRepository = $em->getRepository(Gebruiker::class);
        $this->entityManager = $em;
        $this->stack = $stack;

        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->baseUrl = $baseUrl;

        $this->urlGenerator = $urlGenerator;
    }

    public function supportsRememberMe()
    {
        return false;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        //
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if (isset($credentials['user-id'])) {
            return $this->gebruikerRepository->find($credentials['user-id']);
        }

        if (isset($credentials['auth-code'])) {
            //var_dump($credentials);

            $guzzle = new Client();
            // TODO remove auth of client_id/secret
            $response = $guzzle->post($this->baseUrl . '/protocol/openid-connect/token', [
                'auth' => [$this->clientId, $this->clientSecret],
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'code' => $credentials['auth-code'],
                    'redirect_uri' => $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_oidc_return', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                ]]);

            $output = json_decode($response->getBody()->__toString(), true);

            // TODO check if id_token is available

            $token = (new Parser())->parse((string) $output['id_token']);
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

            $this->stack->getMasterRequest()->getSession()->set('user-id', $user->getId());

            return $user;
        }
    }

    public function start(Request $request, AuthenticationException $authException = null)
    {
        $params = [];
        $params['client_id'] = $this->clientId;
        $params['redirect_uri'] = $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_oidc_return', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $params['response_type'] = 'code';
        $params['scope'] = 'profile email openid';
        //$params['state'] = 'AAA';
        return new RedirectResponse($this->baseUrl . '/protocol/openid-connect/auth?' . http_build_query($params));
    }

    public function supports(Request $request)
    {
        return true;
    }

    public function getCredentials(Request $request)
    {
        if ($request->getSession()->has('user-id')) {
            return ['user-id' => $request->getSession()->get('user-id')];
        }

        if ($request->query->has('code')) {
            return ['auth-code' => $request->query->get('code')];
        }

        return [];
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        //
    }

}