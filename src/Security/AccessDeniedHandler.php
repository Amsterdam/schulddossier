<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Security;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Twig\Environment;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * @var Environment
     */
    private $twigEnvironment;

    public function __construct(TokenStorageInterface $tokenStorage, Environment $twigEnvironment)
    {

        $this->tokenStorage = $tokenStorage;
        $this->twigEnvironment = $twigEnvironment;
    }

    /**
     * @param Request               $request
     * @param AccessDeniedException $accessDeniedException
     *
     * @return string|Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
        /** @var Gebruiker $user */
        $user = $this->tokenStorage->getToken()->getUser();

        if ($user->getType() === Gebruiker::TYPE_ONBEKEND) {
            return new Response($this->twigEnvironment->render('AccessDenied/account-not-ready.twig'), Response::HTTP_FORBIDDEN);
        }
    }
}
