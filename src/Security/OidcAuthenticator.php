<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Security;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use GuzzleHttp\Client;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Token;
use Lcobucci\JWT\ValidationData;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use GuzzleHttp\Exception\TransferException;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use Lcobucci\JWT\Signer\Ecdsa\Sha384;
use Lcobucci\JWT\Signer\Rsa\Sha512;
use Twig\Environment;

/**
 * Class OidcAuthenticator
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Security
 */
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

    /**
     * @var Environment
     */
    private $twig;

    /**
     * OidcAuthenticator constructor.
     *
     * @param EntityManagerInterface    $em
     * @param UrlGeneratorInterface     $urlGenerator
     * @param CsrfTokenManagerInterface $csrf
     * @param LoggerInterface           $logger
     * @param Environment               $twig
     * @param                           $clientId
     * @param                           $clientSecret
     * @param                           $baseUrl
     */
    public function __construct(EntityManagerInterface $em, UrlGeneratorInterface $urlGenerator, CsrfTokenManagerInterface $csrf, LoggerInterface $logger, Environment $twig, $clientId, $clientSecret, $baseUrl)
    {
        $this->gebruikerRepository = $em->getRepository(Gebruiker::class);
        $this->entityManager = $em;

        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->baseUrl = $baseUrl;

        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrf;
        $this->logger = $logger;

        $this->twig = $twig;

    }

    /**
     * @param Request $request
     *
     * @return bool
     */
    public function supports(Request $request)
    {
        if ($request->query->get('state') !== $request->getSession()->getId()) {
            $this->logger->warning('OIDC login, state does not match session');
            return false;
        }

        return $request->attributes->get('_route') === 'gemeenteamsterdam_fixxxschuldhulp_appdossier_index';
    }

    /**
     * @param Request $request
     *
     * @return array|mixed
     */
    public function getCredentials(Request $request)
    {
        return [
            'code' => $request->query->get('code'),
        ];
    }

    /**
     * @param mixed                 $credentials
     * @param UserProviderInterface $userProvider
     *
     * @return Gebruiker|null|object|UserInterface|void
     * @throws \Exception
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if (empty($credentials['code']) === true) {
            return;
        }

        try {
            $guzzle = new Client();
            $response = $guzzle->post($this->baseUrl . '/protocol/openid-connect/token', [
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'code' => $credentials['code'],
                    'redirect_uri' => $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_appdossier_index', [], UrlGeneratorInterface::ABSOLUTE_URL),
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                ]]);

            $output = json_decode($response->getBody()->__toString(), true);
        } catch (TransferException $e) {
            throw new AuthenticationException('Can not set up request to token endpoint ' . $e->getMessage());
        }

        if (empty($output['id_token'])) {
            throw new AuthenticationException('id_token is empty');
        }

        /** @var Token $token */
        $token = (new Parser())->parse((string)$output['id_token']);

        if (!$this->tokenIsValid($token)) {
            throw new AuthenticationException('token is invalid');
        }

        if (!$this->tokenIsVerified($token)) {
            throw new AuthenticationException('token can not be verified');
        }

        if (empty($token->getClaim('email'))) {
            throw new AuthenticationException('Auth server did not supply a e-mail');
        }

        $user = $this->gebruikerRepository->findOneBy(['email' => strtolower($token->getClaim('email'))]);
        if ($user === null) {
            $user = new Gebruiker();
            $user->setEmail($token->getClaim('email'));
            $user->setUsername($token->getClaim('email'));
            $user->setEnabled(true);
            $user->setClearPassword(uniqid() . sha1($token->getClaim('email') . time())); // TODO remove this when password is no longer needed
            if ($token->hasClaim('name')) {
                $user->setNaam($token->getClaim('name'));
            }
            $user->setPasswordChangedDateTime(new \DateTime());
            $user->setType(Gebruiker::TYPE_ONBEKEND);
            $this->entityManager->persist($user);
            $this->entityManager->flush($user);
        }

        return $user;
    }

    /**
     * @param Request        $request
     * @param TokenInterface $token
     * @param string         $providerKey
     *
     * @return null|RedirectResponse|Response
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        $gebruiker = $token->getUser();
        /**
         * @var Gebruiker $gebruiker
         */
        $now = new \DateTime();
        $gebruiker->setLastLogin($now);
        $this->entityManager->flush();

        if ($request->getSession()->has('loginReturnUrl')) {
            $response = new RedirectResponse($request->getSession()->get('loginReturnUrl'));
            $request->getSession()->remove('loginReturnUrl');
            return $response;
        }
    }

    /**
     * @param Request                 $request
     * @param AuthenticationException $exception
     *
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): Response
    {
        return new Response($this->twig->render('OidcAuthenticator/failure.html.twig', [
            'e' => $exception
        ]));
    }

    /**
     * @param Request                      $request
     * @param AuthenticationException|null $authException
     *
     * @return RedirectResponse|Response
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        $request->getSession()->set('loginReturnUrl', $request->getUri());

        $params = [];
        $params['client_id'] = $this->clientId;
        $params['redirect_uri'] = $this->urlGenerator->generate('gemeenteamsterdam_fixxxschuldhulp_appdossier_index', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $params['response_type'] = 'code';
        $params['scope'] = 'profile email openid';
        $params['state'] = $request->getSession()->getId();
        return new RedirectResponse($this->baseUrl . '/protocol/openid-connect/auth?' . http_build_query($params));
    }

    /**
     * @param mixed         $credentials
     * @param UserInterface $user
     *
     * @return bool
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }

    /**
     * @return bool
     */
    public function supportsRememberMe()
    {
        return false;
    }

    /**
     * @param $token
     * @return bool
     */
    private function tokenIsValid(Token $token): bool
    {
        $validationData = new ValidationData();

        $validationData->setIssuer($this->baseUrl);
        $validationData->setAudience($this->clientId);

        return $token->validate($validationData);
    }

    /**
     * @param Token $token
     * @throws AuthenticationException
     * @return bool
     */
    private function tokenIsVerified(Token $token): bool
    {
        $signers = [
            'RS256' => Sha256::class,
            'RS384' => Sha384::class,
            'RS512' => Sha512::class
        ];

        if (isset($signers[$token->getHeader('alg')]) === false) {
            throw new AuthenticationException('Algorithme not supported. Requested algorithmes ' . $token->getHeader('alg'));
        }

        try {
            $guzzle = new Client();
            $response = $guzzle->get($this->baseUrl . '/protocol/openid-connect/certs', []);
            $data = json_decode($response->getBody()->__toString(), true);

            $keyData = null;
            foreach ($data['keys'] as $key) {
                if ($key['kid'] === $token->getHeader('kid')) {
                    $keyData = $key;
                    break;
                }
            }
            if ($keyData === null) {
                throw new AuthenticationException('No matching OIDC key found, kid=' . $token->getHeader('kid'));
            }

            $rsa = new \phpseclib\Crypt\RSA();
            $rsa->loadKey([
                'n' => new \phpseclib\Math\BigInteger(base64_decode(str_replace(['-','_'], ['+','/'], $keyData['n'])), 256),
                'e' => new \phpseclib\Math\BigInteger(base64_decode($keyData['e']), 256)
            ]);
            $publicKey = $rsa->getPublicKey(\phpseclib\Crypt\RSA::PRIVATE_FORMAT_PKCS1);

            // create the key instance
            $signerKey = new Key($publicKey);
            $signer = new $signers[$token->getHeader('alg')];

            return $token->verify($signer, $signerKey);
        }
        catch (TransferException $e) {
            throw new AuthenticationException('Can not connect to OIDC certs URL. Error ' . $e->getMessage());
        }
    }
}

