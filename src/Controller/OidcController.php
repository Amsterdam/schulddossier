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
    /**
     * @Route("/test")
     */
    public function index(Request $request)
    {
        return new Response('<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]) . '</body></html>');
    }

    /**
     * @Route("/return")
     */
    public function return(Request $request)
    {
        return new Response('<html><head></head><boyd>OK! ' . json_encode([$this->getUser()->getId(), $this->getUser()->getEmail()]) . '</body></html>');
    }
}
