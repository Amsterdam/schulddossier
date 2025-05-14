<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OidcController extends AbstractController
{
    /**
     * @Route("/oidc/test")
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        return new Response('<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]) . '</body></html>');
    }

    /**
     * @Route("/oidc/return")
     */
    public function return(): \Symfony\Component\HttpFoundation\Response
    {
        return new Response('<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]) . '</body></html>');
    }
}
