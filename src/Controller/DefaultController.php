<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        return new Response($request->query->has('msg') === false ? 'Hoi' : $request->query->get('msg'));
    }
}