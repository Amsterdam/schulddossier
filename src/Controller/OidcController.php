<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/oidc")
 */
class OidcController extends AbstractController
{
    #[\Symfony\Component\Routing\Attribute\Route(path: '/oidc/test')]
    public function index(): Response
    {
        return new Response('<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]) . '</body></html>');
    }

    #[\Symfony\Component\Routing\Attribute\Route(path: '/oidc/return')]
    public function return(): Response
    {
        return new Response('<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]) . '</body></html>');
    }
}
