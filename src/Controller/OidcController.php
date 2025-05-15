<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OidcController extends AbstractController
{
    #[Route(path: '/oidc/test')]
    public function index(): Response
    {
        return new Response(
            '<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]
            ) . '</body></html>'
        );
    }

    #[Route(path: '/oidc/return')]
    public function return(): Response
    {
        return new Response(
            '<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]
            ) . '</body></html>'
        );
    }
}
