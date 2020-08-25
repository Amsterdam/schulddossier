<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Security;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * @var EngineInterface
     */
    private $templateEngine;

    public function __construct(TokenStorageInterface $tokenStorage, EngineInterface $templateEngine)
    {
        $this->tokenStorage = $tokenStorage;
        $this->templateEngine = $templateEngine;
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
            return new Response($this->templateEngine->render('Security/accessDenied.html.twig', [
                'message' => 'Gebruikerstype is onbekend. [' . $user->getEmail() . ']',
            ]), Response::HTTP_FORBIDDEN);
        }
        
        return new Response($accessDeniedException->getMessage(), Response::HTTP_FORBIDDEN);
    }
}
